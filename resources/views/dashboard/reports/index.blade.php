@extends('dashboard.layouts.main')

@section('container')
    <div class="container py-4 py-xl-5" style="font-family: ABeeZee, sans-serif;">
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="row mb-5">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2>Manajemen Pengaduan</h2>
                <p class="w-lg-50">SPI UNIB</p>
            </div>
            <div class="col-10">
                <form action="/dashboard/reports">
                    <div class="input-group mb-3 fontlink">
                        <input type="text" class="form-control" placeholder="Cari Berdasarkan Tajuk Pengaduan"
                            name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-2">
                <form action="/dashboard/reports/printall" method="post" class="d-inline" target="_BLANK">
                    @csrf
                    <button class="btn btn-sm bg-primary text-white" onclick="return confirm('Cetak Laporan?')">Cetak
                        Semua Laporan</button>
                </form>
            </div>
        </div>
        <table class="table table-hover fontlink">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Waktu Pelaporan</th>
                    <th scope="col">Kategori Pelapor</th>
                    <th scope="col">Tajuk</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reports as $key => $report)
                    <tr>
                        <td>{{ $reports->firstItem() + $key }}</td>
                        <td>{{ $report->created_at }}</td>
                        <td>{{ $report->kategori }}</td>
                        <td>{{ $report->judul }}</td>
                        <td>
                            <a href="/dashboard/reports/{{ $report->id }}" class="badge bg-warning border-0">Detail</a>
                            <form action="/dashboard/reports/print" method="post" class="d-inline" target="_BLANK">
                                @csrf
                                <input type='hidden' name='id' value='{{ $report->id }}'>
                                <button class="badge bg-primary border-0" onclick="return confirm('Cetak Laporan?')">Cetak
                                    Laporan</button>
                            </form>
                            <form action="/dashboard/reports/{{ $report->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Anda Yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    {{ $reports->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
