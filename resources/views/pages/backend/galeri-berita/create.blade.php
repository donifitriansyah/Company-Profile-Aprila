<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{ route('admin-galeri-berita.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="hidden" name="berita_id" value="{{ $berita->id }}">

                <div class="modal-header">
                    <h5 class="modal-title">
                        Tambah Gambar
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>
                </div>

                <div class="modal-body">

                    <div class="mb-3">
                        <label class="form-label">
                            Gambar
                        </label>

                        <input type="file" name="gambar" class="form-control" required>
                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Caption
                        </label>

                        <input type="text" name="caption" class="form-control">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">
                            Urutan
                        </label>

                        <input type="number" name="urutan" class="form-control"
                            value="{{ old('urutan', $nextUrutan) }}">

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">

                        Batal

                    </button>

                    <button class="btn btn-primary">

                        Simpan

                    </button>

                </div>

            </form>

        </div>
    </div>
</div>
