<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\CourseCurriculum;
use App\Models\CourseOverview;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class CourseController extends Controller
{
    /**
     * LIST COURSE
     */
    public function index()
    {
        $courses = Course::with('instructors')->latest()->get();
        return view('pages.backend.course.index', compact('courses'));
    }

    /**
     * FORM CREATE
     */
    public function create()
    {
        $instructors = Instructor::all();
        return view('pages.backend.course.create', compact('instructors'));
    }

    /**
     * STORE COURSE + RELATION
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required|in:kursus,kelas_paket',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        // HANDLE IMAGE
        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('courses', 'public');
        }

        // CREATE COURSE (FIXED - tidak pakai only)
        $course = Course::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath,
            'category' => $request->category,
            'start_date' => $request->start_date,
            'duration_days' => $request->duration_days,
            'seat_available' => $request->seat_available,
            'price' => $request->price,
        ]);

        // OVERVIEW
        CourseOverview::create([
            'course_id' => $course->id,
            'content' => $request->overview_content,
            'video_url' => $request->video_url,
        ]);

        // CURRICULUM
        if ($request->curriculums) {
            foreach ($request->curriculums as $index => $item) {
                CourseCurriculum::create([
                    'course_id' => $course->id,
                    'title' => $item['title'],
                    'description' => $item['description'] ?? null,
                    'order' => $index,
                ]);
            }
        }

        // INSTRUCTOR
        if ($request->instructor_ids) {
            $course->instructors()->attach($request->instructor_ids);
        }

        return redirect()->route('admin-course.index')
            ->with('success', 'Course created successfully');
    }

    /**
     * SHOW DETAIL COURSE
     */
    public function show($id)
    {
        $course = Course::with([
            'overview',
            'curriculums',
            'instructors',
            'reviews'
        ])->findOrFail($id);

        return view('pages.backend.course.show', compact('course'));
    }

    /**
     * FORM EDIT
     */
    public function edit($id)
    {
        $course = Course::with(['overview', 'curriculums', 'instructors'])->findOrFail($id);
        $instructors = Instructor::all();

        return view('pages.backend.course.edit', compact('course', 'instructors'));
    }

    /**
     * UPDATE COURSE
     */
    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'category' => 'required|in:kursus,kelas_paket',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        // DATA BASE UPDATE
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'category' => $request->category,
            'start_date' => $request->start_date,
            'duration_days' => $request->duration_days,
            'seat_available' => $request->seat_available,
            'price' => $request->price,
        ];

        // IMAGE UPDATE (SAFE)
        if ($request->hasFile('image')) {

            // optional: delete old image
            if ($course->image && Storage::disk('public')->exists($course->image)) {
                Storage::disk('public')->delete($course->image);
            }

            $data['image'] = $request->file('image')->store('courses', 'public');
        }

        // UPDATE COURSE
        $course->update($data);

        // OVERVIEW UPDATE / CREATE IF NULL
        if ($course->overview) {
            $course->overview->update([
                'content' => $request->overview_content,
                'video_url' => $request->video_url,
            ]);
        } else {
            CourseOverview::create([
                'course_id' => $course->id,
                'content' => $request->overview_content,
                'video_url' => $request->video_url,
            ]);
        }

        // CURRICULUM REPLACE
        CourseCurriculum::where('course_id', $course->id)->delete();

        if ($request->curriculums) {
            foreach ($request->curriculums as $index => $item) {
                CourseCurriculum::create([
                    'course_id' => $course->id,
                    'title' => $item['title'],
                    'description' => $item['description'] ?? null,
                    'order' => $index,
                ]);
            }
        }

        // SYNC INSTRUCTOR
        $course->instructors()->sync($request->instructor_ids ?? []);

        return redirect()->route('admin-course.index')
            ->with('success', 'Course updated successfully');
    }

    /**
     * DELETE COURSE
     */
    public function destroy($id)
    {
        $course = Course::findOrFail($id);

        // relasi otomatis ikut terhapus (cascade)
        $course->delete();

        return redirect()->route('admin-course.index')->with('success', 'Course deleted successfully');
    }
}
