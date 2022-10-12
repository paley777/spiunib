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
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card-header fontlink">
            Dashboard
        </div>
        <div class="card-body">
            <h5 class="card-title" id="fontheader">Manajemen Pengaduan</h5>
            <p class="card-text" id="fontp">Seluruh pengaduan terdapat di tabel ini</p>
            <form action="/dashboard/reports">
                <div class="input-group mb-3 fontlink">
                    <input type="text" class="form-control" placeholder="Cari Berdasarkan Tajuk Pengaduan" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                </div>
            </form>
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
                    <tr>
                        @foreach ($reports as $key => $report)
                            <td>{{ $reports->firstItem() + $key }}</td>
                            <td>{{ $report->created_at }}</td>
                            <td>{{ $report->kategori }}</td>
                            <td>{{ $report->judul }}</td>
                            <td>
                                <a href="/dashboard/reports/{{ $report->id }}"
                                    class="badge bg-warning border-0">Detail</a>
                                <form action="/dashboard/reports/print" method="post" class="d-inline" target="_BLANK">
                                    @csrf
                                    <input type='hidden' name='id' value='{{ $report->id }}'>
                                    <button class="badge bg-primary border-0"
                                        onclick="return confirm('Cetak Laporan?')">Cetak
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
        </div>
        <div class="row">
            <div class="col">
                <div class="d-flex justify-content-center">
                    {{ $reports->links() }}
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            @spiunib
        </div>
    </div>
@endsection
