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
    <div class="card">
        <div class="card-header fontlink text-center">
            Dashboard <a href="/dashboard/reports">Kembali ></a>
        </div>
        <div class="card-body" id="print">
            <div class="row align-items-center text-center">
                <div class="col">
                    <img src="{{ asset('storage/images/logo_unib.png') }}" alt="" width="60" height="60"></a>
                    <h1 class="mt-1 fw-semibold" id="fontp">
                        Satuan Pengawas Internal Universitas Bengkulu
                    </h1>
                    <h1 class="mt-1 fw-normal fst-italic fontlink">
                        Telah menerima laporan pengaduan berkode {{ $report->id }}
                    </h1>
                    <hr>
                </div>
            </div>
            <h1 class="mt-1 fw-normal fst-italic fontlink">
                Laporan ini bertajuk :
            </h1>
            <h5 class="card-title fw-bold" id="fontheader">{{ $report->judul }}</h5>
            <h1 class="card-text fontlink fw-normal">Pengaduan oleh {{ $report->pelapor }} pada
                {{ $report->created_at->format('d/m/Y H:i:s') }}</h1>
            <h1 class="card-text fontlink fw-normal">Pelapor merupakan seorang {{ $report->kategori }}</h1>
            <h1 class="card-text fontlink fw-normal">Melaporkan oknum dari unit kerja {{ $report->unitkerja }} dengan isi
                laporan sebagai berikut :</h1>
            <hr>
            <h1 class="card-text fontlink fw-normal text-justify">{!! $report->isilaporan !!}</h1>
            <h1 class="card-text fontlink fw-normal">Dengan lampiran gambar berikut (apabila ada) :</h1>
            <img src="{{ asset('storage/' . $report->lampiran) }}" style=" width:700px; height: 100%;">
            <br><br>
            <h1 class="card-text fontlink fw-normal">Dan lampiran lanjutan berikut (apabila ada) : <a
                    href="{{ $report->link }}">{{ $report->link }}</a></h1>
            <h1 class="card-text fontlink fw-normal">Pelapor mencantumkan nomor hp sebagai berikut (apabila ada) :
                {{ $report->nohp }} dan email (apabila ada) : {{ $report->email }}</h1>
        </div>
        <div class="card-footer text-muted">
            @spiunib
        </div>
    </div>
@endsection
