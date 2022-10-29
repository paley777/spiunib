@extends('dashboard.layouts.main')

@section('container')
    <style>
        #fontheader {
            font-size: 1.563rem !important;
        }

        #fontheader2 {
            font-size: 4rem !important;
        }

        #fontp {
            font-size: 1.25rem !important;
        }

        .fontlink {
            font-size: 1rem !important;
        }

        .text-justify {
            text-align: justify;
        }
    </style>
    <div class="card text-center">
        <div class="card-header fontlink">
            Dashboard
        </div>
        <div class="card-body">
            <h5 class="card-title" id="fontheader">Selamat Datang di Dashboard SPI Universitas Bengkulu</h5>
            <p class="card-text" id="fontp">Rekapitulasi Sistem SPI di bawah ini</p>
            <div class="card-group">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" id="fontheader2">{{ $countreports }}</h5>
                        <p class="card-text">Jumlah Pengaduan terdata</p>
                        <p class="card-text"><small class="text-muted">Last refresh page</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" id="fontheader2">{{ $countnews }}</h5>
                        <p class="card-text">Jumlah Berita/Pengumuman terdata</p>
                        <p class="card-text"><small class="text-muted">Last refresh page</small></p>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" id="fontheader2">{{ $countusers }}</h5>
                        <p class="card-text">Jumlah User terdata</p>
                        <p class="card-text"><small class="text-muted">Last refresh page</small></p>
                    </div>
                </div>

            </div>
        </div>
        <div class="card-footer text-muted">
            @spiunib
        </div>
    </div>
@endsection
