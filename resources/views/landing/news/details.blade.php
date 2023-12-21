@extends('landing.layouts.main2')

@section('container')
    <style>
        img {
            max-width: 100%;
            height: auto !important;
        }
    </style>
    <div class="alert alert-warning mt-4" style="background-color: #f3f3f3">
        <div class="row mx-1">
            <div class="col-9">
                <h5 class="alert-heading fw-normal" id="fontheader">{{ $news[0]->title }}</h5>
                <h6 class="fw-light" id="fonlink">Diunggah oleh {{ $news[0]->creator }} pada
                    {{ Carbon\Carbon::parse($news[0]->created_at)->isoFormat('dddd, D MMMM Y H:m:s') }}</h6>
            </div>
        </div>
        <div class="row mx-1" style="text-align: justify;
        text-justify: inter-word;">
            <div class="col">
                <p class="fw-normal">
                    {!! $news[0]->body !!}
            </div>
        </div>

        <div class="col">
            <a href="/news" id="fontlink">Kembali ke Laman Berita Utama ></a>
        </div>
    </div>
@endsection
