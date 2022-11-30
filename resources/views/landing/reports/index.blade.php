@extends('landing.layouts.main2')

@section('container')
    <div style="background-color: #f3f3f3;font-family: ABeeZee, sans-serif;">
        <div class="container" style="background-color: #ffffff">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 gy-md-0">
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;"
                                src="images\bouncy-a-paper-airplane-with-a-check-mark.gif" /></div>
                    </div>
                    <div class="col-md-6 d-md-flex align-items-md-center">
                        <div>
                            <h2 class="text-uppercase fw-bold">Whistleblowing System</h2>
                            <p class="my-3" style="text-align: justify;max-width: 500px;">Selamat datang di Whistleblowing
                                System. Anda
                                akan diarahkan
                                untuk mengisi formulir
                                pelaporan
                                terkait terduga
                                tindak pelanggaran yang terjadi di Universitas Bengkulu. Anda tidak perlu khawatir identitas
                                anda
                                akan
                                terungkap
                                karena SPI dapat merahasiakan identitas anda sebagai anonim. Apabila anda tidak ingin
                                identitas anda
                                terungkap,
                                isilah formulir di bawah dengan tanpa mencantumkan identitas asli Anda, Anda diperkenankan
                                untuk
                                membuat
                                identitas samaran.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container py-4 py-xl-5">
                <div class="row gy-4 gy-md-0">
                    <div
                        class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                        <div style="max-width: 500px;">
                            <h2 class="text-uppercase fw-bold">Menjadi Whistleblower</h2>
                            <p class="my-3">Bantu SPI dengan menjadi Whistleblower yang
                                bijak.
                                Anda dapat
                                melaporkan tindak
                                pelanggaran dengan cermat dan jelas dengan memenuhi unsur berikut.</p>
                            <ul class="list-group list-group-flush text-justify">
                                <li class="list-group-item">Apa? : Perbuatan apa yang terindikasi pelanggaran.</li>
                                <li class="list-group-item">Siapa? : Siapa yang terduga terlibat pelanggaran.</li>
                                <li class="list-group-item">Di mana? : Di mana lokasi pelanggaran tersebut.</li>
                                <li class="list-group-item">Kapan? : Kapan pelanggaran tersebut terjadi.</li>
                                <li class="list-group-item">Bagaimana? : Bagaimana pelanggaran tersebut terjadi
                                    (modus/cara).
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;"
                                src="images\bouncy-completed-checklist-form-on-a-clipboard-and-pencil.gif" /></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-xs-12">
                    <div class="card fw-normal" id="slide">
                        <div class="card-header" id="fontp">
                            Formulir Pelaporan
                        </div>
                        <div class="card-body" id="fontp">
                            <form class="row g-2 needs-validation" method="POST" action="/report/create"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="col-md-4 position-relative">
                                    <label for="validationCustom01" class="form-label">Nama Pelapor (Whistleblower)<span
                                            class="text-danger">*</span></label>
                                    <input type="text" id="validationCustom01" class="form-control" name="pelapor"
                                        placeholder="Isi Nama Anda" required>

                                </div>
                                <div class="col-md-2 position-relative">
                                    <label for="inputEmail4" class="form-label">Kategori Pelapor<span
                                            class="text-danger">*</span></label>
                                    <select class="form-select" aria-label="Default select example" name="kategori"
                                        required>
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
                                    <input type="text"
                                        onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"
                                        class="form-control" id="inputAddress" name="nohp"
                                        placeholder="Isi Nomor Telepon Anda">
                                </div>
                                <div class="col-md-9 position-relative">
                                    <label for="inputAddress2" class="form-label">Judul Laporan<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Isi Judul Laporan Anda" name="judul" required>

                                </div>
                                <div class="col-md-3 position-relative">
                                    <label for="inputCity" class="form-label">Unit Kerja Terlapor<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputCity"
                                        placeholder="Isi Unit Kerja Terlapor" name="unitkerja" required>

                                </div>
                                <div class="col-12 position-relative">
                                    <label for="inputState" class="form-label">Isi Laporan<span
                                            class="text-danger">*</span></label>
                                    <div class="form-group">
                                        <textarea class="ckeditor form-control" name="isilaporan" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-10">
                                    <label for="inputZip" class="form-label">Lampiran gambar (Maksimal ukuran 5 MB. file
                                        gambar .JPG , .PNG. Hanya 1 gambar)</label>
                                    <input class="form-control" type="file" name="lampiran">
                                </div>
                                <div class="col-md-10">
                                    <label for="inputZip" class="form-label">Lampiran lanjutan (sertakan link google drive
                                        yang
                                        memuat seluruh bukti)</label>
                                    <input class="form-control" type="text" name="link">
                                </div>
                                <p>
                                    (Wajib terisi untuk kolom dengan tanda "<span class="text-danger">*</span>").
                                </p>
                                <button class="btn btn-outline-primary" type="submit">
                                    Laporkan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
