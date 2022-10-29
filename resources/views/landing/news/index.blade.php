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
    <div class="preloader">
        <div class="loading">
            <div class="spinner-border text-dark" role="status">
            </div>
            <p>Harap Tunggu</p>
        </div>
    </div>
    <div class="alert alert-warning mx-5 mt-4 my-0">
        <div class="row">
            <div class="col-8">
                <h4 class="alert-heading fw-normal" id="fontheader">Berita dan Pengumuman SPI <i class="bi bi-newspaper"></i>
                </h4>
            </div>
            <div class="col-4">
                <form action="/news">
                    <div class="input-group mb-3 fontlink">
                        <input type="text" class="form-control" placeholder="Cari Berdasarkan Tajuk Berita"
                            name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        @if ($news->count())
            <div class="row text-justify">
                <div class="col-lg-6 col-xs-12">
                    @if ($news[0])
                        <div class="card text-bg-dark mb-3 mt-3">

                            <form method="post" action="/spi/details">
                                @csrf
                                <input type="text" id="validationCustom01" name="id" value="{{ $news[0]->id }}"
                                    required hidden>
                                <img src="{{ $news[0]->thumbnail }}"
                                    style="height: 400px;object-fit: cover;filter: brightness(50%);" class="card-img">
                                <div class="card-img-overlay">
                                    <h5 class="card-title" id="fontp">{{ $news[0]->title }}</h5>
                                    <p class="card-text" id="fontlink">{{ Str::limit(strip_tags($news[0]->body), 200) }}...
                                    </p>
                                    <p class="card-text" id="fontlink"><small>Diunggah
                                            {{ $news[0]->created_at->diffForHumans() }} yang lalu.</small></p>
                                    <button type="submit" class="stretched-link">Menuju Berita</button>
                            </form>
                        @else
                            <p></p>
                    @endif
                </div>
            </div>
    </div>

    <div class="col-lg-3 col-xs-12">
        @if ($news[1])
            <div class="card mb-3 mt-3">

                <form method="post" action="/spi/details">
                    @csrf
                    <input type="text" id="validationCustom01" name="id" value="{{ old('id', $news[1]->id) }}"
                        required hidden>
                    <img src="{{ $news[1]->thumbnail }}" style="height: 203px;object-fit: cover;" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" id="fontp">{{ $news[1]->title }}
                        </h5>
                        <p class="card-text"id="fontlink"> {{ Str::limit(strip_tags($news[1]->body), 100) }}...</p>
                        <p class="card-text" id="fontlink"><small>Diunggah
                                {{ $news[1]->created_at->diffForHumans() }} yang lalu.</small></p>
                        <button type="submit" class="stretched-link">Menuju Berita</button>
                </form>
            @else
                <p></p>
        @endif
    </div>
    </div>
    </div>
    <div class="col-lg-3 col-xs-12">
        @if ($news[2])
            <div class="card mb-3 mt-3">

                <form method="post" action="/spi/details">
                    @csrf
                    <input type="text" id="validationCustom01" name="id" value="{{ old('id', $news[2]->id) }}"
                        required hidden>
                    <img src="{{ $news[2]->thumbnail }}" style="height: 203px;object-fit: cover;" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" id="fontp">{{ $news[2]->title }}
                        </h5>
                        <p class="card-text"id="fontlink"> {{ Str::limit(strip_tags($news[2]->body), 100) }}...</p>
                        <p class="card-text" id="fontlink"><small>Diunggah
                                {{ $news[2]->created_at->diffForHumans() }} yang lalu.</small></p>
                        <button type="submit" class="stretched-link">Menuju Berita</button>
                </form>
            @else
                <p></p>
        @endif
    </div>
    </div>
    </div>
    </div>
    @foreach ($news->skip(3) as $news3)
        <div class="row">
            <div class="col">
                @if ($news3)
                    <div class="card mb-3">

                        <div class="row g-0">
                            <div class="col-md-4">

                                <form method="post" action="/spi/details">
                                    @csrf
                                    <input type="text" id="validationCustom01" name="id"
                                        value="{{ old('id', $news3->id) }}" required hidden>
                                    <img src="{{ $news3->thumbnail }}" class="img-fluid rounded-start"
                                        style="width: 100%;height: 150px;object-fit: cover;">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title" id="fontp">{{ $news3->title }}</h5>
                                    <p class="card-text"id="fontlink">
                                        {{ Str::limit(strip_tags($news3->body), 100) }}...</p>
                                    <p class="card-text" id="fontlink"><small>Diunggah
                                            {{ $news3->created_at->diffForHumans() }} yang lalu.</small></p>
                                    <button type="submit" class="stretched-link">Menuju Berita</button>
                                    </form>
                                </div>
                            </div>
                        @else
                            <p>asdasd</p>
                @endif
            </div>
        </div>
        </div>
        </div>
    @endforeach
@else
    <p>
        No Post Found.
    </p>
    @endif
    </div>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
@endsection
