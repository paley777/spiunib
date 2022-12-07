@extends('dashboard.layouts.main')

@section('container')
    <div class="container py-4 py-xl-5" style="font-family: ABeeZee, sans-serif;">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Manajemen Berita</h2>
                <p class="w-lg-50">SPI UNIB</p>
            </div>
            <div class="card-body">
                <div class="alert alert-warning mx-5 mt-4">
                    <div class="row">
                        <div class="col-9">
                            <h4 class="alert-heading fw-normal" id="fontheader">{{ $news->title }}
                            </h4>
                            <h5 class="fw-light" id="fonlink">Diunggah oleh {{ $news->creator }} pada
                                {{ $news->created_at }}
                            </h5>
                        </div>
                        <div class="col-3 d-flex">
                            <a href="/dashboard/news" id="fontlink">Kembali ke Laman Sebelumnya ></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="" id="fontlink">{!! $news->body !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
