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
                <h4 class="alert-heading fw-normal" id="fontheader">{{ $news[0]->title }}</h4>
                <h5 class="fw-light" id="fonlink">Diunggah oleh {{ $news[0]->creator }} pada
                    {{ $news[0]->created_at->format('l, d/F/Y') }}</h5>
            </div>
            <div class="col-3 d-flex">
                <a href="/news" id="fontlink">Kembali ke Laman Berita Utama ></a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="fw-normal text-justify" id="fontlink">{!! $news[0]->body !!}
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
@endsection
