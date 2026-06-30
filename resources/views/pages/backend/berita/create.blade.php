@extends('layouts.backend')

@section('title', 'Tambah Berita')

@section('content')

<div class="page-heading mb-3">
    <h3>Tambah Berita</h3>
</div>

<div class="page-content">
    <div class="container-fluid">

        <form action="{{ route('admin-berita.store') }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            <div class="row">

                {{-- ================= KONTEN ================= --}}
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-header">
                            <h5>Konten Berita</h5>
                        </div>

                        <div class="card-body">

                            {{-- Judul --}}
                            <div class="mb-3">
                                <label class="form-label">Judul Berita</label>
                                <input
                                    type="text"
                                    name="judul"
                                    class="form-control @error('judul') is-invalid @enderror"
                                    value="{{ old('judul') }}"
                                    required>

                                @error('judul')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Ringkasan --}}
                            <div class="mb-3">
                                <label class="form-label">Ringkasan</label>

                                <textarea
                                    name="ringkasan"
                                    rows="4"
                                    class="form-control">{{ old('ringkasan') }}</textarea>
                            </div>

                            {{-- Isi --}}
                            <div class="mb-3">
                                <label class="form-label">Isi Berita</label>

                                <textarea
                                    id="editor"
                                    name="isi"
                                    rows="12"
                                    class="form-control">{{ old('isi') }}</textarea>
                            </div>

                        </div>
                    </div>

                    {{-- SEO --}}
                    <div class="card mt-3">
                        <div class="card-header">
                            <h5>SEO</h5>
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label>Meta Title</label>

                                <input
                                    type="text"
                                    name="meta_title"
                                    class="form-control"
                                    value="{{ old('meta_title') }}">
                            </div>

                            <div class="mb-3">
                                <label>Meta Description</label>

                                <textarea
                                    name="meta_description"
                                    rows="3"
                                    class="form-control">{{ old('meta_description') }}</textarea>
                            </div>

                        </div>
                    </div>

                </div>

                {{-- ================= SIDEBAR ================= --}}
                <div class="col-lg-4">

                    {{-- Publish --}}
                    <div class="card">

                        <div class="card-header">
                            <h5>Publikasi</h5>
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label>Kategori</label>

                                <select
                                    name="kategori_id"
                                    class="form-select">

                                    <option value="">Pilih Kategori</option>

                                    @foreach($kategori as $item)
                                        <option
                                            value="{{ $item->id }}"
                                            {{ old('kategori_id') == $item->id ? 'selected' : '' }}>

                                            {{ $item->nama }}

                                        </option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="mb-3">

                                <label>Status</label>

                                <select
                                    name="status"
                                    class="form-select">

                                    <option value="draft">Draft</option>

                                    <option value="publish">
                                        Publish
                                    </option>

                                </select>

                            </div>

                            <div class="mb-3">

                                <label>Tanggal Publish</label>

                                <input
                                    type="datetime-local"
                                    name="published_at"
                                    class="form-control">

                            </div>

                            <div class="form-check mb-3">

                                <input
                                    class="form-check-input"
                                    type="checkbox"
                                    name="is_featured"
                                    value="1">

                                <label class="form-check-label">

                                    Jadikan Featured

                                </label>

                            </div>

                        </div>

                    </div>

                    {{-- Thumbnail --}}
                    <div class="card mt-3">

                        <div class="card-header">
                            <h5>Thumbnail</h5>
                        </div>

                        <div class="card-body">

                            <img
                                id="preview"
                                src="https://placehold.co/600x350?text=Thumbnail"
                                class="img-fluid rounded border mb-3">

                            <input
                                type="file"
                                name="thumbnail"
                                id="thumbnail"
                                class="form-control"
                                accept="image/*">

                        </div>

                    </div>

                    {{-- Button --}}
                    <div class="card mt-3">

                        <div class="card-body">

                            <button
                                class="btn btn-primary w-100">

                                Simpan Berita

                            </button>

                            <a
                                href="{{ route('admin-berita.index') }}"
                                class="btn btn-secondary w-100 mt-2">

                                Kembali

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </form>

    </div>
</div>

@endsection
