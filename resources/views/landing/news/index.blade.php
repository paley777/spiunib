@extends('landing.layouts.main2')

@section('container')
    <div style="background-color: #f3f3f3;font-family: ABeeZee, sans-serif;">
        <div class="container py-4 py-xl-5" style="background-color: #ffffff">
            <div class="row mb-3">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>Berita dan Pengumuman SPI</h2>
                    <p class="w-lg-50">Berbagai berita terkini dari Satuan Pengawasan Internal Universitas Bengkulu.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form action="/news">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari Berdasarkan Tajuk Berita"
                                name="search" value="{{ request('search') }}">
                            <button class="btn btn-warning" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            @if ($news->count())
                @if ($news[0])
                    <form method="post" action="/spi/details">
                        @csrf
                        <input type="text" id="validationCustom01" name="id" value="{{ $news[0]->id }}" required
                            hidden>
                        <section class="text-white">
                            <div
                                style="height: 600px;background-image: linear-gradient(
                                    rgba(0, 0, 0, 0.281), 
                                    rgba(0, 0, 0, 0.469)
                                  ),url({{ $news[0]->thumbnail }});background-position: center;background-size: cover;">
                                <div class="container h-100">
                                    <div class="row h-100">
                                        <div
                                            class="col-md-6 text-center text-md-start d-flex d-sm-flex d-md-flex justify-content-center align-items-center justify-content-md-start align-items-md-center justify-content-xl-center">
                                            <div style="max-width: 350px;">
                                                <h1 class="text-uppercase fw-bold">{{ $news[0]->title }}
                                                </h1>
                                                <p class="my-3">{!! Str::limit(strip_tags($news[0]->body), 200) !!}...</p>
                                                <p><small>Created
                                                        {{ $news[0]->created_at->diffForHumans() }}</small></p>
                                                <button class="btn btn-warning" type="submit">Menuju Berita</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </form>
                @else
                @endif
                <div class="container py-4 py-xl-5">
                    <div class="row gy-4 row-cols-1 row-cols-md-2 row-cols-xl-3">
                        @foreach ($news->skip(1) as $news1)
                            <form method="post" action="/spi/details">
                                @csrf
                                <input type="text" id="validationCustom01" name="id" value="{{ $news1->id }}"
                                    required hidden>
                                <div class="col">
                                    <div class="card"><img class="card-img-top w-100 d-block fit-cover"
                                            style="height: 200px;" src="{{ $news1->thumbnail }}" />
                                        <div class="card-body p-4">
                                            <p class="text-warning card-text mb-0">Berita SPI</p>
                                            <h4 class="card-title">{{ $news1->title }}</h4>
                                            <p class="card-text">{!! Str::limit(strip_tags($news1->body), 200) !!}...</p>
                                            <p><small>Created
                                                    {{ $news1->created_at->diffForHumans() }}</small></p>
                                            <button class="btn btn-sm btn-warning" type="submit">Menuju Berita</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="d-flex justify-content-center">
                            {{ $news->links() }}
                        </div>
                    </div>
                </div>
            @else
                <p>
                    No Post Found.
                </p>
            @endif
        </div>
    </div>
@endsection
