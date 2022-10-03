@extends('landing.layouts.main2')

@section('container')
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
    <style>
        #header {
            background-image: linear-gradient(to top, #12145c 0%, #1d52a6 100%);
        }
    </style>
    <style>
        #fontheader {
            font-size: 1.563rem !important;
        }

        #fontp {
            font-size: 1.25rem !important;
        }

        #fontlink {
            font-size: 1rem !important;
        }

        .text-justify {
            text-align: justify;
        }
    </style>
    <div class="preloader">
        <div class="loading">
            <div class="spinner-border text-dark" role="status">
            </div>
            <p>Harap Tunggu</p>
        </div>
    </div>
    <div class="mx-5 mt-4 px-3" id="header">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row text-white">
            <h4 class="alert-heading mt-4 fw-normal" id="fontheader">Gambaran Umum <i class="bi bi-book"></i></i></h4>
            <p class="text-justify fw-light" id="fontlink">Satuan Pengawasan Internal (SPI) Universitas Bengkulu, merupakan
                organ Universitas
                Bengkulu yang menjalankan fungsi pengawasan bidang non akademik untuk dan atas nama Rektor. Hal ini sesuai
                dengan Peraturan Menteri Pendidikan dan Kebudayaan No. 75 Tahun 2013 tentang Statuta Universitas Bengkulu
                serta mengacu pada PP No. 23 Tahun 2005 tentang Pengelolaan Keuangan Badan Layanan Umum. SPI Universitas
                Bengkulu dalam menjalankan tugasnya tetap memegang prinsip bersifat independen, obyektif, memiliki
                integritas, profesional/kompetensi, kerahasiaan dan tidak terpengaruh oleh tekanan dari pihak manapun serta
                memegang teguh kode etik auditor internal SPI Universitas Bengkulu.
            </p>
            <p class="text-justify fw-light" id="fontlink">Lingkup pengawasan yang dilakukan oleh SPI, Universitas Bengkulu
                meliputi reviu, evaluasi, audit, pemantauan (monitoring) yang bertujuan untuk mengendalikan kegiatan,
                terselenggaranya laporan keuangan yang baik, meningkatnya efektifitas dan efisiensi, serta mendeteksi secara
                dini terjadinya penyimpangan dan ketidakpatuhan terhadap ketentuan perundang-undangan.
            </p>
            <hr>
        </div>
        <div class="row text-white">
            <div class="col-lg-4 col-xs-12">
                <h4 class="alert-heading mt-4 fw-normal" id="fontheader">Dasar Hukum Pembentukan Unit Kerja <i
                        class="bi bi-bank"></i></i></h4>
                <p class="text-justify fw-light" id="fontlink">Satuan Pengawasan Internal UNIB pada awalnya berdiri sebagai
                    tim Ad-Hoc tahun 2011 dengan mengangkat 3 (tiga) orang tim Satuan Pengawasan Internal Universitas
                    Bengkulu. Kemudian pada bulan Juli tahun 2014 SPI UNIB disahkan sebagai salah satu organ Universitas
                    Bengkulu berdasarkan Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 75 tahun 2013
                    tentang Statuta Universitas Bengkulu.
                </p>
            </div>
            <div class="col-lg-8 col-xs-12">
                <h4 class="alert-heading mt-4 fw-normal" id="fontheader">Visi, Misi dan Tujuan <i
                        class="bi bi-bullseye"></i>
                </h4>
                <h1 class="text-justify fw-normal" id="fontp">Visi</h1>
                <p class="text-justify fw-light" id="fontlink">Mewujudkan fungsi pengawasan internal dalam perwujudan
                    pelaksanaan good university governance dalam rangka mengantarkan Universitas Bengkulu menjadi World
                    Class University tahun 2025.
                </p>
                <h1 class="text-justify fw-normal" id="fontp">Misi</h1>
                <p class="text-justify fw-light" id="fontlink">Menjalankan pengawasan terhadap keuangan, asset, sumber daya
                    manusia dan organisasi secara efektif dan efisien.
                </p>
                <h1 class="text-justify fw-normal" id="fontp">Tujuan</h1>
                <p class="text-justify fw-light" id="fontlink">Satuan Pengawasan Internal Universitas Bengkulu bertujuan
                    untuk memastikan kehandalan sistem pengendalian internal selingkung Universias Bengkulu
                </p>
            </div>
            <hr>
        </div>
        <div class="row text-white">
            <div class="col-lg-4 col-xs-12">
                <h4 class="alert-heading mt-4 fw-normal" id="fontheader">Dasar Hukum Pembentukan Unit Kerja <i
                        class="bi bi-bank"></i></i></h4>
                <p class="text-justify fw-light" id="fontlink">Satuan Pengawasan Internal UNIB pada awalnya berdiri sebagai
                    tim Ad-Hoc tahun 2011 dengan mengangkat 3 (tiga) orang tim Satuan Pengawasan Internal Universitas
                    Bengkulu. Kemudian pada bulan Juli tahun 2014 SPI UNIB disahkan sebagai salah satu organ Universitas
                    Bengkulu berdasarkan Peraturan Menteri Pendidikan dan Kebudayaan Republik Indonesia Nomor 75 tahun 2013
                    tentang Statuta Universitas Bengkulu.
                </p>
            </div>
            <div class="col-lg-8 col-xs-12">
                <h4 class="alert-heading mt-4 fw-normal" id="fontheader">Tugas, Pokok dan Fungsi <i
                        class="bi bi-list-task"></i>
                </h4>
                <h1 class="text-justify fw-light" id="fontlink">1. Menyusun program pengawasan;
                </h1>
                <h1 class="text-justify fw-light" id="fontlink">2. Melakukan pengawasan kebijakan dan program;
                </h1>
                <h1 class="text-justify fw-light" id="fontlink">3. Melakukan pengawasan pengelolaan kepegawaian, keuangan
                    dan Barang Milik Negara;
                </h1>
                <h1 class="text-justify fw-light" id="fontlink">4. Melakukan pemantauan dan pengkoordinasian tindak lanjut
                    hasil pemeriksaan internal dan eksternal;
                </h1>
                <h1 class="text-justify fw-light" id="fontlink">5. Melakukan pendampingan dan reviu laporan keuangan;
                </h1>
                <h1 class="text-justify fw-light" id="fontlink">6. Memberikan saran dan rekomendasi;
                </h1>
                <h1 class="text-justify fw-light" id="fontlink">7. Menyusun laporan hasil pengawasan;
                </h1>
                <h1 class="text-justify fw-light" id="fontlink">8. Melaksanakan evaluasi hasil pengawasan;
                </h1>
                <h1 class="text-justify fw-light" id="fontlink">9. Pemberian saran dan/atau pertimbangan mengenai perbaikan
                    pengelolaan kegiatan non-akademik pada
                    Rektor atas dasar hasil pengawasan
                </h1>
            </div>
            <hr>
        </div>
        <hr>
        <div class="row text-white">
            <div class="col-lg-4 col-xs-12">
                <h4 class="alert-heading mt-4 fw-normal" id="fontheader">Lokasi Kami <i class="bi bi-geo-alt"></i></h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3867.1854582681017!2d102.2702553146754!3d-3.7597955972646777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b1c18941d9f3%3A0x1aecc8afb80fdf02!2sUniversitas%20Bengkulu!5e1!3m2!1sid!2sid!4v1664813354338!5m2!1sid!2sid"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-lg-8 col-xs-12">
                <h4 class="alert-heading mt-4 fw-normal" id="fontheader">Sumber Daya Manusia Unit Kerja <i
                        class="bi bi-people"></i>
                </h4>
                <h1 class="text-justify fw-light" id="fontlink">Sumber Daya Manusia di SPI Universitas Bengkulu berjumlah
                    sembilan orang yang terdiri dari tenaga pendidik sebanyak 5 orang, dan tenaga kependidikan sebanyak 4
                    orang. Adapun rincian sumber daya manusia SPI Universitas Bengkulu sebagai berikut:
                </h1>
                <table class="table text-white" id="fontlink">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Nila Aprila, SE. M.Si.Ak., CA., CRP.</td>
                            <td>Ketua SPI</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Pratana Puspa Midiastuty, SE., M.Si.Ak.</td>
                            <td>Sekretaris SPI</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Santi Nirmalasari, A.Md.Keb.</td>
                            <td>Bendahara SPI</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Fenny Marietza, SE., M.Ak.</td>
                            <td>Anggota SPI</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td>Yovan Witanto, ST., MT.</td>
                            <td>Anggota SPI</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Tri Andika, S.H., M.H.</td>
                            <td>Anggota SPI</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Rara Mianti, SE.</td>
                            <td>Staff SPI</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Eka Praja Nurcianti, SE., CRA.</td>
                            <td>Staff SPI</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Heru Kurniawan, SE., CRA.</td>
                            <td>Staff SPI</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <hr>
        </div>
        <hr>
        <br>
    </div>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
@endsection
