@extends('dashboard.layouts.main')

@section('container')
    <div class="container py-4 py-xl-5" style="font-family: ABeeZee, sans-serif;">
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h6><a href="/dashboard/reports">Kembali ></a></h6>
            </div>
        </div>
        <div class="card-body" id="print">
            <div class="row align-items-center text-center">
                <div class="col">
                    <img src="{{ asset('storage/images/logo_unib.png') }}" alt="" width="60" height="60"></a>
                    <h4 class="mt-1 fw-semibold" id="fontp">
                        Satuan Pengawas Internal Universitas Bengkulu
                    </h4>
                    <h6 class="mt-1 fw-normal fst-italic fontlink">
                        Telah menerima laporan pengaduan berkode {{ $report->id }}
                    </h6>
                    <hr>
                </div>
            </div>
            <h5 class="mt-1 fw-normal fst-italic fontlink">
                Laporan ini bertajuk :
            </h5>
            <h5 class="card-title fw-bold" id="fontheader">{{ $report->judul }}</h5>
            <h6 class="card-text fontlink fw-normal">Pengaduan oleh {{ $report->pelapor }} pada
                {{ Carbon\Carbon::parse($report->created_at)->isoFormat('dddd, D MMMM Y') }}</h6>
            <h6 class="card-text fontlink fw-normal">Pelapor merupakan seorang {{ $report->kategori }}</h6>
            <h6 class="card-text fontlink fw-normal">Melaporkan oknum dari unit kerja {{ $report->unitkerja }} dengan isi
                laporan sebagai berikut :</h6>
            <hr>
            <h6 class="card-text fontlink fw-normal" style="text-align: justify;">{!! $report->isilaporan !!}</h6>
            <h6 class="card-text fontlink fw-normal">Dengan lampiran gambar berikut (apabila ada) :</h6>
            <img src="{{ asset('storage/' . $report->lampiran) }}" style=" width:700px; height: 100%;">
            <br><br>
            <h6 class="card-text fontlink fw-normal" style="text-align: justify;">Dan lampiran lanjutan berikut (apabila
                ada) : <a href="{{ $report->link }}">{{ $report->link }}</a></h6>
            <h6 class="card-text fontlink fw-normal" style="text-align: justify;">Pelapor mencantumkan nomor hp sebagai
                berikut (apabila ada) :
                {{ $report->nohp }} dan email (apabila ada) : {{ $report->email }}</h6>
        </div>
    </div>
@endsection
