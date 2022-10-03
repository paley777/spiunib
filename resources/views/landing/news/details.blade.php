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
    <div class="alert alert-warning mx-5 mt-4">
        <div class="row">
            <div class="col-9">
                <h4 class="alert-heading fw-normal" id="fontheader">Launching Website Resmi SPI Universitas Bengkulu</h4>
                <h5 class="fw-light" id="fonlink">Diunggah oleh Administrator pada 30 September 2022</h5>
            </div>
            <div class="col-3 d-flex">
                <a href="/news" id="fontlink">Kembali ke Laman Berita Utama ></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card text-bg-dark mb-3 mt-3">
                    <img src="https://source.unsplash.com/random/" style="height: 400px;object-fit: cover;"
                        class="card-img">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="fw-normal text-justify" id="fontlink">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus commodo magna diam.
                    Sed nisl arcu, malesuada id felis euismod, facilisis iaculis enim. Curabitur risus justo, mattis in
                    dapibus non, dignissim quis lectus. Proin imperdiet turpis ante, tincidunt placerat metus mattis et.
                    Fusce sed porttitor mauris, et tempus nulla. Cras auctor, lectus ut euismod mattis, erat mauris
                    tristique erat, venenatis condimentum neque lacus condimentum est. Ut mattis mi ante, eget blandit nulla
                    aliquet non. Pellentesque tempor, justo at semper pretium, lorem augue tincidunt urna, ac venenatis
                    massa libero vel augue. Maecenas hendrerit venenatis felis ac dignissim. Phasellus ultrices quis purus
                    eget rutrum.</p>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
@endsection
