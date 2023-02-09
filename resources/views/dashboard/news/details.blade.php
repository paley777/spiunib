@extends('dashboard.layouts.main')

@section('container')
    <style>
        img {
            max-width: 100%;
            height: auto !important;
        }
    </style>
    <div class="container py-4 py-xl-5"
        style="font-family: ABeeZee, sans-serif;">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Manajemen Berita</h2>
                <p class="w-lg-50">SPI UNIB</p>
                <div class="col">
                    <a href="/dashboard/news" id="fontlink">Kembali ke Laman Sebelumnya ></a>
                </div>
            </div>
            <div class="card-body">
                <div class="alert alert-warning mx-0 mt-4">
                    <div class="row mx-1">
                        <div class="col-9">
                            <h5 class="alert-heading fw-normal" id="fontheader">{{ $news->title }}
                            </h5>
                            <h6 class="fw-light" id="fonlink">Diunggah oleh {{ $news->creator }} pada
                                {{ $news->created_at }}
                            </h6>
                        </div>
                    </div>
                    <div class="row mx-1" style="text-align: justify;
                    text-justify: inter-word;">
                        <div class="col-12">
                            <p class="fw-light">{!! $news->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
