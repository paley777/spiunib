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
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Cari Berita dan Pengumuman"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                </form>
            </div>
        </div>
        <div class="row text-justify">
            <div class="col-lg-6 col-xs-12">
                <div class="card text-bg-dark mb-3 mt-3">
                    <img src="https://source.unsplash.com/random/"
                        style="height: 400px;object-fit: cover;filter: brightness(50%);" class="card-img">
                    <div class="card-img-overlay">
                        <h5 class="card-title" id="fontp">Launching Website SPI <span
                                class="badge rounded-pill text-bg-primary">Berita</span></h5>
                        <p class="card-text" id="fontlink">30 September 2022 - SPI Universitas Bengkulu telah meluncurkan
                            situs terbarunya
                            untuk mengakomodasi....</p>
                        <p class="card-text" id="fontlink"><small>Diunggah pada 3 mins ago</small></p>
                        <a href="/news/details/1" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-12">
                <div class="card mb-3 mt-3">
                    <img src="https://source.unsplash.com/random/" style="height: 203px;object-fit: cover;"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" id="fontp">Card title <span
                                class="badge rounded-pill text-bg-primary">Pengumuman</span>
                        </h5>
                        <p class="card-text"id="fontlink">This is a wider card with supporting text below as a natural
                            lead-in to
                            additional
                            content...</p>
                        <p class="card-text" id="fontlink"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#" class="stretched-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-12">
                <div class="card mb-3 mt-3">
                    <img src="https://source.unsplash.com/random/" style="height: 203px;object-fit: cover;"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title" id="fontp">Card title</h5>
                        <p class="card-text" id="fontlink">This is a wider card with supporting text below as a natural
                            lead-in to
                            additional
                            content. This content is a little bit longer.</p>
                        <p class="card-text" id="fontlink"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://source.unsplash.com/random/" class="img-fluid rounded-start"
                                style="width: 100%;height: 150px;object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" id="fontp">Card title</h5>
                                <p class="card-text" id="fontlink">This is a wider card with supporting text below as a
                                    natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text" id="fontlink"><small class="text-muted">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://source.unsplash.com/random/" class="img-fluid rounded-start"
                                style="width: 100%;height: 150px;object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" id="fontp">Card title</h5>
                                <p class="card-text" id="fontlink">This is a wider card with supporting text below as a
                                    natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text" id="fontlink"><small class="text-muted">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://source.unsplash.com/random/" class="img-fluid rounded-start"
                                style="width: 100%;height: 150px;object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" id="fontp">Card title</h5>
                                <p class="card-text" id="fontlink">This is a wider card with supporting text below as a
                                    natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text" id="fontlink"><small class="text-muted">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://source.unsplash.com/random/" class="img-fluid rounded-start"
                                style="width: 100%;height: 150px;object-fit: cover;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title" id="fontp">Card title</h5>
                                <p class="card-text" id="fontlink">This is a wider card with supporting text below as a
                                    natural lead-in to
                                    additional content. This content is a little bit longer.</p>
                                <p class="card-text" id="fontlink"><small class="text-muted">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        })
    </script>
@endsection
