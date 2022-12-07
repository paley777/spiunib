@extends('dashboard.layouts.main')

@section('container')
    <div class="container py-4 py-xl-5" style="font-family: ABeeZee, sans-serif;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Ubah Berita</h2>
                <p class="w-lg-50">Manajemen Berita</p>
            </div>
            <form class="row g-2 needs-validation" method="post" action="/dashboard/news/{{ $news->id }}" novalidate>
                @method('put')
                @csrf
                <div class="col-md-6 position-relative">
                    <label for="validationCustom01" class="form-label">Pembuat Berita<span
                            class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="creator"
                        placeholder="Isi Nama Anda" value="{{ old('creator', $news->creator) }}" required>
                    <div class="invalid-tooltip">
                        Isi Nama Anda.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationCustom01" class="form-label">Tajuk Berita<span
                            class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="title"
                        placeholder="Isi Tajuk Berita" value="{{ old('title', $news->title) }}" required>
                    <div class="invalid-tooltip">
                        Isi Tajuk Berita.
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Thumbnail Berita (Masukan 1 link gambar saja.)<span
                            class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="thumbnail"
                        placeholder="Isi Thumbnail Berita" value="{{ old('thumbnail', $news->thumbnail) }}" required>
                    <div class="invalid-tooltip">
                        Isi Thumbnail Berita.
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Isi Berita<span class="text-danger">*</span></label>
                    <div class="form-group">
                        <textarea class="ckeditor form-control" name="body">{{ old('body', $news->body) }}</textarea>
                    </div>
                </div>
                <p>
                    (Wajib terisi untuk kolom dengan tanda "<span class="text-danger">*</span>").
                </p>
                <input type="text" id="validationCustom01" class="form-control" name="id"
                    value="{{ old('id', $news->id) }}" required readonly hidden>
                <button class="btn btn-outline-primary" type="submit">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
