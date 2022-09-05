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
    <div class="preloader">
        <div class="loading">
            <div class="spinner-border text-dark" role="status">
            </div>
            <p>Harap Tunggu</p>
        </div>
    </div>
    <div class="alert alert-light mx-5 mt-4" role="alert">
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
             
            </div>
            <div class="col-lg-3 col-xs-12">
              
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
@endsection
