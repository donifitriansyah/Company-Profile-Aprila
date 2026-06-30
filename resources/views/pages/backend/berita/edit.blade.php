@extends('layouts.backend')

@section('title', 'Edit Berita')

@section('content')

<div class="page-heading mb-3">
    <h3>Edit Berita</h3>
</div>

<div class="page-content">
    <div class="container-fluid">

        <form action="{{ route('admin-berita.update', $berita->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')

            <div class="row">

                {{-- KONTEN --}}
                <div class="col-lg-8">

                    <div class="card">
                        <div class="card-header">
                            <h5>Konten Berita</h5>
                        </div>

                        <div class="card-body">

                            <div class="mb-3">
                                <label class="form-label">Judul Berita</label>

                                <input
                                    type="text"
                                    name="judul"
                                    class="form-control @error('judul') is-invalid @enderror"
                                    value="{{ old('judul', $berita->judul) }}">

                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Ringkasan</label>

                                <textarea
                                    name="ringkasan"
                                    rows="4"
                                    class="form-control">{{ old('ringkasan', $berita->ringkasan) }}</textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Isi Berita</label>

                                <textarea
                                    id="editor"
                                    name="isi"
                                    rows="12"
                                    class="form-control">{{ old('isi', $berita->isi) }}</textarea>
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
                                    value="{{ old('meta_title', $berita->meta_title) }}">
                            </div>

                            <div class="mb-3">
                                <label>Meta Description</label>

                                <textarea
                                    name="meta_description"
                                    rows="3"
                                    class="form-control">{{ old('meta_description', $berita->meta_description) }}</textarea>
                            </div>

                        </div>
                    </div>

                </div>

                {{-- SIDEBAR --}}
                <div class="col-lg-4">

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

                                    @foreach($kategori as $item)

                                        <option
                                            value="{{ $item->id }}"
                                            {{ old('kategori_id', $berita->kategori_id) == $item->id ? 'selected' : '' }}>

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

                                    <option
                                        value="draft"
                                        {{ old('status', $berita->status) == 'draft' ? 'selected' : '' }}>
                                        Draft
                                    </option>

                                    <option
                                        value="publish"
                                        {{ old('status', $berita->status) == 'publish' ? 'selected' : '' }}>
                                        Publish
                                    </option>

                                </select>

                            </div>

                            <div class="mb-3">

                                <label>Tanggal Publish</label>

                                <input
                                    type="datetime-local"
                                    name="published_at"
                                    class="form-control"
                                    value="{{ old('published_at', optional($berita->published_at)->format('Y-m-d\TH:i')) }}">

                            </div>

                            <div class="form-check">

                                <input
                                    type="checkbox"
                                    class="form-check-input"
                                    name="is_featured"
                                    value="1"
                                    {{ old('is_featured', $berita->is_featured) ? 'checked' : '' }}>

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
                                src="{{ $berita->thumbnail ? asset('storage/'.$berita->thumbnail) : 'https://placehold.co/600x350?text=Thumbnail' }}"
                                class="img-fluid rounded border mb-3">

                            <input
                                type="file"
                                name="thumbnail"
                                id="thumbnail"
                                class="form-control"
                                accept="image/*">

                            <small class="text-muted">
                                Kosongkan jika tidak ingin mengganti thumbnail.
                            </small>

                        </div>

                    </div>

                    <div class="card mt-3">

                        <div class="card-body">

                            <button class="btn btn-primary w-100">
                                Update Berita
                            </button>

                            <a href="{{ route('admin-berita.index') }}"
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

@push('scripts')

<script>

document.getElementById('thumbnail').addEventListener('change', function(e){

    let reader = new FileReader();

    reader.onload = function(){

        document.getElementById('preview').src = reader.result;

    }

    reader.readAsDataURL(e.target.files[0]);

});

ClassicEditor
.create(document.querySelector('#editor'))
.catch(error => {
    console.error(error);
});

</script>

@endpush
