<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstructorController extends Controller
{
    /**
     * LIST INSTRUCTOR
     */
    public function index()
    {
        $instructors = Instructor::latest()->get();
        return view('pages.backend.instructor', compact('instructors'));
    }

    /**
     * STORE INSTRUCTOR
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'category' => 'required|in:instruktur,tim',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        // HANDLE PHOTO UPLOAD
        $photoPath = null;

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('instructors', 'public');
        }

        Instructor::create([
            'name' => $request->name,
            'position' => $request->position,
            'category' => $request->category,
            'bio' => $request->bio,
            'photo' => $photoPath
        ]);

        return redirect()->route('admin-instructor.index')
            ->with('success', 'Instructor berhasil ditambahkan');
    }

    /**
     * UPDATE INSTRUCTOR
     */
    public function update(Request $request, $id)
    {
        $instructor = Instructor::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'position' => 'required',
            'category' => 'required|in:instruktur,tim',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'position' => $request->position,
            'category' => $request->category,
            'bio' => $request->bio,
        ];

        // UPDATE PHOTO SAFELY
        if ($request->hasFile('photo')) {

            if ($instructor->photo && Storage::disk('public')->exists($instructor->photo)) {
                Storage::disk('public')->delete($instructor->photo);
            }

            $data['photo'] = $request->file('photo')->store('instructors', 'public');
        }

        $instructor->update($data);

        return redirect()->route('admin-instructor.index')
            ->with('success', 'Instructor berhasil diupdate');
    }

    /**
     * DELETE INSTRUCTOR
     */
    public function destroy($id)
    {
        $instructor = Instructor::findOrFail($id);

        if ($instructor->photo && Storage::disk('public')->exists($instructor->photo)) {
            Storage::disk('public')->delete($instructor->photo);
        }

        $instructor->delete();

        return redirect()->route('admin-instructor.index')
            ->with('success', 'Instructor berhasil dihapus');
    }
}
