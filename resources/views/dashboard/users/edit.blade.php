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
                <h2>Ubah Akun</h2>
                <p class="w-lg-50">Manajemen Akun</p>
            </div>
            <form class="row g-2 needs-validation" method="post" action="/dashboard/users/{{ $user->id }}" novalidate>
                @method('put')
                @csrf
                <div class="col-md-12 position-relative">
                    <label for="validationCustom01" class="form-label">ID. (Tidak perlu diubah)<span
                            class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="id"
                        value="{{ old('id', $user->id) }}" required readonly>
                    <div class="invalid-tooltip">
                        Isi ID Anda.
                    </div>
                </div>
                <div class="col-md-4 position-relative">
                    <label for="validationCustom01" class="form-label">Nama Lengkap<span
                            class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="nama"
                        placeholder="Isi Nama Anda" value="{{ old('nama', $user->nama) }}" required>
                    <div class="invalid-tooltip">
                        Isi Nama Anda.
                    </div>
                </div>
                <div class="col-md-2 position-relative">
                    <label for="validationCustom01" class="form-label">NIP<span class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="nip"
                        placeholder="Isi NIP Anda" value="{{ old('nip', $user->nip) }}" required>
                    <div class="invalid-tooltip">
                        Isi NIP Anda.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Jabatan<span class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="jabatan"
                        placeholder="Isi Jabatan Anda" value="{{ old('jabatan', $user->jabatan) }}" required>
                    <div class="invalid-tooltip">
                        Isi Jabatan Anda.
                    </div>
                </div>
                <div class="col-md-3">
                    <label for="validationCustom01" class="form-label">Nomor Telepon<span
                            class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="no_tlp"
                        placeholder="Isi Nomor Telepon Anda" value="{{ old('no_tlp', $user->no_tlp) }}" required>
                    <div class="invalid-tooltip">
                        Isi Nomor Telepon Anda.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="validationCustom01" class="form-label">E-mail<span class="text-danger">*</span></label>
                    <input type="text" id="validationCustom01" class="form-control" name="email"
                        placeholder="Isi E-mail Anda" value="{{ old('email', $user->email) }}" required>
                    <div class="invalid-tooltip">
                        Isi E-mail Anda.
                    </div>
                </div>
                <div class="col-md-6 position-relative">
                    <label for="inputCity" class="form-label">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="inputCity" placeholder="Isi Password Anda"
                        name="password" required>
                    <div class="invalid-tooltip">
                        Isi Password Anda.
                    </div>
                </div>
                <p>
                    (Wajib terisi untuk kolom dengan tanda "<span class="text-danger">*</span>").
                </p>
                <button class="btn btn-outline-primary" type="submit">
                    Ubah Data
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
@endsection
