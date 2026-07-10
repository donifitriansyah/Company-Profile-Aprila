<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderBy('sort_order')
            ->orderByDesc('created_at')
            ->get();

        return view('pages.backend.client', compact('clients'));
    }

    /**
     * Store a newly created resource.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'logo'        => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'website'     => 'nullable|url|max:255',
            'description' => 'nullable|string',
            'sort_order'  => 'nullable|integer|min:0',
            'is_active'   => 'nullable|boolean',
        ]);

        $logo = null;

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo')->store('clients', 'public');
        }

        Client::create([
            'name'        => $request->name,
            'logo'        => $logo,
            'website'     => $request->website,
            'description' => $request->description,
            'sort_order'  => $request->sort_order ?? 0,
            'is_active'   => $request->boolean('is_active'),
        ]);

        return redirect()
            ->route('admin-klien.index')
            ->with('success', 'Data klien berhasil ditambahkan.');
    }

    /**
     * Update the specified resource.
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'logo'        => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'website'     => 'nullable|url|max:255',
            'description' => 'nullable|string',
            'sort_order'  => 'nullable|integer|min:0',
            'is_active'   => 'nullable|boolean',
        ]);

        $logo = $client->logo;

        if ($request->hasFile('logo')) {

            if ($client->logo && Storage::disk('public')->exists($client->logo)) {
                Storage::disk('public')->delete($client->logo);
            }

            $logo = $request->file('logo')->store('clients', 'public');
        }

        $client->update([
            'name'        => $request->name,
            'logo'        => $logo,
            'website'     => $request->website,
            'description' => $request->description,
            'sort_order'  => $request->sort_order ?? 0,
            'is_active'   => $request->boolean('is_active'),
        ]);

        return redirect()
            ->route('admin-klien.index')
            ->with('success', 'Data klien berhasil diperbarui.');
    }

    /**
     * Remove the specified resource.
     */
    public function destroy($id)
{
    $client = Client::findOrFail($id);

    if ($client->logo && Storage::disk('public')->exists($client->logo)) {
        Storage::disk('public')->delete($client->logo);
    }

    $client->delete();

    return redirect()
        ->route('admin-klien.index')
        ->with('success', 'Data klien berhasil dihapus.');
}
}
