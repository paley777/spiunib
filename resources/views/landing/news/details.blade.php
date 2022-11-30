@extends('landing.layouts.main2')

@section('container')
    <div class="alert alert-warning mx-5 mt-4" style="background-color: #f3f3f3">
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
@endsection
