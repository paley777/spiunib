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
            <h4 class="alert-heading mt-4">Tentang Kami <i class="bi bi-people"></i></h4>
            <p class="text-justify">1. Melakukan verifikasi terhadap hasil auditor eksternal.
                2. Melakukan audit dan reviu terhadap semua Fakultas, Unit, dan Lembaga.
                3. Membuat Kertas Kerja Audit (KKA), Kertas Kerja Reviu (KKR) dan memberikan laporan kepada Rektor dalam
                bentuk Laporan Audit (LA) )/ Laporan Reviu (LR) atas audit dan reviu yang dilakukan.
                4. Melakukan penilaian dan evaluasi pencapaian realisasi anggaran secara berkala (triwulan, semesteran, dan
                tahunan).
                5. Melakukan reviu terhadap Laporan Akuntabilitas Kinerja Intansi Pemerintah (LAKIP) dan Indikator Kinerja
                Undip (IKU).
                6. Melakukan penilaian dan evaluasi pencapaian hasil pelaksanaan program dan kegiatan (yang berkaitan dengan
                keuangan, tata laksana, sarana dan prasarana, substansi dan kinerja organisasi).
                7. Memberikan rekomendasi atau saran perbaikan dalam rangka memperbaiki kelemahan dan kekurangan pengelolaan
                keuangan Universitas Diponegoro (perencanaan, penganggaran, penatausahaan, akuntansi, evaluasi, dan
                pertanggungjawaban).
            </p>
            <hr>
        </div>
        <div class="row text-white">
            <div class="col-lg-8 col-xs-12">
                <h4 class="alert-heading mt-4">Visi dan Misi <i class="bi bi-broadcast"></i></h4>
                <p class="text-justify">1. Melakukan verifikasi terhadap hasil auditor eksternal.
                    2. Melakukan audit dan reviu terhadap semua Fakultas, Unit, dan Lembaga.
                    3. Membuat Kertas Kerja Audit (KKA), Kertas Kerja Reviu (KKR) dan memberikan laporan kepada Rektor dalam
                    bentuk Laporan Audit (LA) )/ Laporan Reviu (LR) atas audit dan reviu yang dilakukan.
                    4. Melakukan penilaian dan evaluasi pencapaian realisasi anggaran secara berkala (triwulan, semesteran,
                    dan
                    tahunan).

                </p>
            </div>
            <div class="col-4">
                <h4 class="alert-heading mt-4">Lokasi Kami <i class="bi bi-broadcast"></i></h4>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.231142023998!2d102.2702553146754!3d-3.7597955972646777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e36b1c18941d9f3%3A0x1aecc8afb80fdf02!2sUniversitas%20Bengkulu!5e0!3m2!1sid!2sid!4v1664518105615!5m2!1sid!2sid"
                    width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <hr>
        </div>
        <br>

    </div>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
@endsection
