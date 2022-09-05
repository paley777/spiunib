@extends('landing.layouts.main2')

@section('container')
    <style>
        #slide {
            position: relative;
            left: -100px;
            -webkit-animation: slide 0.5s forwards;
            -webkit-animation-delay: 0s;
            animation: slide 0.5s forwards;
            animation-delay: 0s;
        }

        @-webkit-keyframes slide {
            100% {
                left: 0;
            }
        }

        @keyframes slide {
            100% {
                left: 0;
            }
        }
    </style>
    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
    <div class="preloader">
        <div class="loading">
            <div class="spinner-border text-dark" role="status">
            </div>
            <p>Harap Tunggu</p>
        </div>
    </div>
    <div class="alert alert-light mx-5 mt-4" role="alert">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <h4 class="alert-heading">Whistleblowing System</h4>
        <p class="text-justify">Selamat datang di Whistleblowing System. Anda akan diarahkan untuk mengisi formulir
            pelaporan
            terkait terduga
            tindak pelanggaran yang terjadi di Universitas Bengkulu. Anda tidak perlu khawatir identitas anda akan terungkap
            karena SPI dapat merahasiakan identitas anda sebagai anonim. Apabila anda tidak ingin identitas anda terungkap,
            isilah formulir di bawah dengan tanpa mencantumkan identitas asli Anda, Anda diperkenankan untuk membuat
            identitas samaran.</p>
        <hr>
        <p class="mb-0"></p>
        <div class="row">
            <div class="col-lg-9 col-xs-12">
                <div class="card" id="slide">
                    <div class="card-header">
                        Formulir Pelaporan
                    </div>
                    <div class="card-body">
                        <form class="row g-2 needs-validation" method="POST" action="/report/create" novalidate
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4 position-relative">
                                <label for="validationCustom01" class="form-label">Nama Pelapor (Whistleblower)<span
                                        class="text-danger">*</span></label>
                                <input type="text" id="validationCustom01" class="form-control" name="pelapor"
                                    placeholder="Isi Nama Anda" required>
                                <div class="invalid-tooltip">
                                    Isi Nama Anda.
                                </div>
                            </div>
                            <div class="col-md-2 position-relative">
                                <label for="inputEmail4" class="form-label">Kategori Pelapor<span
                                        class="text-danger">*</span></label>
                                <select class="form-select" aria-label="Default select example" name="kategori" required>
                                    <option selected disabled value="">Pilih Kategori</option>
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Tenaga Kependidikan">Tenaga Kependidikan</option>
                                    <option value="Umum">Umum</option>
                                </select>
                                <div class="invalid-tooltip">
                                    Isi Kategori Anda.
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="inputPassword4" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="inputPassword4" name="email"
                                    placeholder="Isi E-mail Anda">
                            </div>
                            <div class="col-md-3">
                                <label for="inputAddress" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="inputAddress" name="nohp"
                                    placeholder="Isi Nomor Telepon Anda">
                            </div>
                            <div class="col-md-9 position-relative">
                                <label for="inputAddress2" class="form-label">Judul Laporan<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputAddress2"
                                    placeholder="Isi Judul Laporan Anda" name="judul" required>
                                <div class="invalid-tooltip">
                                    Isi Judul Laporan Anda.
                                </div>
                            </div>
                            <div class="col-md-3 position-relative">
                                <label for="inputCity" class="form-label">Unit Kerja Terlapor<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="inputCity"
                                    placeholder="Isi Unit Kerja Terlapor" name="unitkerja" required>
                                <div class="invalid-tooltip">
                                    Isi Unit Kerja Terlapor.
                                </div>
                            </div>
                            <div class="col-12 position-relative">
                                <label for="inputState" class="form-label">Isi Laporan<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Isi Laporan Anda Di Sini" name="isilaporan"
                                    rows="3" required></textarea>
                                <div class="invalid-tooltip">
                                    Isi Laporan Anda.
                                </div>
                            </div>
                            <div class="col-md-10">
                                <label for="inputZip" class="form-label">Lampiran (Jika lampiran lebih dari satu harap di
                                    rar/zip. Maksimal ukuran 5 MB.)</label>
                                <input class="form-control" type="file" name="lampiran">
                                <p>
                                    (Wajib terisi untuk kolom dengan tanda "<span class="text-danger">*</span>").
                                </p>
                            </div>
                            <button class="btn btn-outline-primary" type="submit">
                                Laporkan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-12">
                <div class="alert alert-light" role="alert">
                    <h4 class="alert-heading">Menjadi Whistleblower.</h4>
                    <p class="text-justify">Bantu SPI dengan menjadi Whistleblower yang bijak. Anda dapat melaporkan tindak
                        pelanggaran dengan cermat dan jelas dengan memenuhi unsur berikut.</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Apa? : Perbuatan apa yang terindikasi pelanggaran.</li>
                        <li class="list-group-item">Siapa? : Siapa yang terduga terlibat pelanggaran.</li>
                        <li class="list-group-item">Di mana? : Di mana lokasi pelanggaran tersebut.</li>
                        <li class="list-group-item">Kapan? : Kapan pelanggaran tersebut terjadi.</li>
                        <li class="list-group-item">Bagaimana? : Bagaimana pelanggaran tersebut terjadi (modus/cara).</li>
                    </ul>
                </div>
            </div>
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
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
@endsection
