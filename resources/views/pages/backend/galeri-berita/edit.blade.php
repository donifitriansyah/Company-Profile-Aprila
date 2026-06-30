<div class="modal fade"
    id="edit{{ $galeri->id }}"
    tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="{{ route('admin-galeri-berita.update', $galeri->id) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="modal-header">

                    <h5 class="modal-title">

                        Edit Gambar

                    </h5>

                    <button type="button"
                        class="btn-close"
                        data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="text-center mb-3">

                        <img src="{{ asset('storage/' . $galeri->gambar) }}"
                            class="img-fluid rounded"
                            style="max-height:220px">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">

                            Ganti Gambar

                        </label>

                        <input type="file"
                            name="gambar"
                            class="form-control">

                        <small class="text-muted">

                            Kosongkan jika tidak ingin mengganti gambar.

                        </small>

                    </div>

                    <div class="mb-3">

                        <label class="form-label">

                            Caption

                        </label>

                        <input type="text"
                            name="caption"
                            class="form-control"
                            value="{{ old('caption', $galeri->caption) }}">

                    </div>

                    <div class="mb-3">

                        <label class="form-label">

                            Urutan

                        </label>

                        <input type="number"
                            name="urutan"
                            class="form-control"
                            value="{{ old('urutan', $galeri->urutan) }}">

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">

                        Batal

                    </button>

                    <button class="btn btn-primary">

                        Update

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>
