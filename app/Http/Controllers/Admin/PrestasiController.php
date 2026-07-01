<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PrestasiController extends Controller
{
    public function index()
    {
        $awards = Award::orderBy('order', 'asc')->get();
        return view('pages.backend.award', compact('awards'));
    }



    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('award', 'public');
        }

        Award::create([
            'title' => $request->title,
            'institution' => $request->institution,
            'description' => $request->description,
            'image' => $imagePath,
            'order' => $request->order ?? 0,
            'is_active' => $request->is_active ?? 1,
        ]);

        return redirect()->route('award.index')
            ->with('success', 'Award berhasil ditambahkan');
    }



    public function update(Request $request, $id)
    {
        $award = Award::findOrFail($id);

        $request->validate([
            'title' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
        ]);

        $data = [
            'title' => $request->title,
            'institution' => $request->institution,
            'description' => $request->description,
            'order' => $request->order ?? 0,
            'is_active' => $request->is_active ?? 1,
        ];

        if ($request->hasFile('image')) {

            if ($award->image && Storage::disk('public')->exists($award->image)) {
                Storage::disk('public')->delete($award->image);
            }

            $data['image'] = $request->file('image')->store('awards', 'public');
        }

        $award->update($data);

        return redirect()->route('award.index')
            ->with('success', 'Award berhasil diupdate');
    }

    public function destroy($id)
    {
        $award = Award::findOrFail($id);

        if ($award->image && Storage::disk('public')->exists($award->image)) {
            Storage::disk('public')->delete($award->image);
        }

        $award->delete();

        return redirect()->route('award.index')
            ->with('success', 'Award berhasil dihapus');
    }
}
