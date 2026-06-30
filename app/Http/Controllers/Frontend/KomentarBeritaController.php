<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\KomentarBerita;
use Illuminate\Http\Request;

class KomentarBeritaController extends Controller
{
    public function store(Request $request, $slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();

        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'nullable|email|max:100',
            'komentar' => 'required|string|min:5|max:1000',
            'g-recaptcha-response' => 'required|captcha',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'komentar.required' => 'Komentar wajib diisi.',
            'komentar.min' => 'Komentar minimal 5 karakter.',
            'g-recaptcha-response.required' => 'Silakan centang reCAPTCHA.',
            'g-recaptcha-response.captcha' => 'Verifikasi reCAPTCHA gagal. Silakan coba lagi.',
        ]);

        KomentarBerita::create([
            'berita_id'   => $berita->id,
            'nama'        => strip_tags($validated['nama']),
            'email'       => $validated['email'] ?? null,
            'komentar'    => strip_tags($validated['komentar']),
            'is_approved' => false,
        ]);

        return redirect()->back()->with(
            'success',
            'Terima kasih. Komentar Anda berhasil dikirim dan sedang menunggu persetujuan admin.'
        );
    }

    public function index(Request $request)
    {
        $status = $request->status;

        $komentar = KomentarBerita::with('berita')
            ->when($status == 'pending', function ($q) {
                $q->where('is_approved', false);
            })
            ->when($status == 'approved', function ($q) {
                $q->where('is_approved', true);
            })
            ->latest()
            ->get();

        return view(
            'pages.backend.komentar-berita',
            compact('komentar', 'status')
        );
    }

    public function approve($id)
    {
        $komentar = KomentarBerita::findOrFail($id);

        $komentar->update([
            'is_approved' => true
        ]);

        return back()->with('success', 'Komentar berhasil disetujui.');
    }

    public function reject($id)
    {
        $komentar = KomentarBerita::findOrFail($id);

        $komentar->update([
            'is_approved' => false
        ]);

        return back()->with('success', 'Komentar dikembalikan ke status menunggu.');
    }

    public function destroy($id)
    {
        KomentarBerita::findOrFail($id)->delete();

        return back()->with('success', 'Komentar berhasil dihapus.');
    }
}
