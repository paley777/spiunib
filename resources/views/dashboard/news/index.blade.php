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
                <h2>Manajemen Berita</h2>
                <p class="w-lg-50">SPI UNIB</p>
            </div>
            <div class="col-10">
                <form action="/dashboard/news">
                    <div class="input-group mb-3 fontlink">
                        <input type="text" class="form-control" placeholder="Cari Berdasarkan Tajuk Berita"
                            name="search" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-2">
                <a href="/dashboard/news/create" class="btn text-white bg-primary border-0">+ Tambah Berita Baru</a>
            </div>
        </div>
        <table class="table table-hover fontlink">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Kreator</th>
                    <th scope="col">Tajuk</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($newses as $key => $news)
                        <td>{{ $newses->firstItem() + $key }}</td>
                        <td>{{ Carbon\Carbon::parse($news->created_at)->isoFormat('dddd, D MMMM Y H:m:s') }}</td>
                        <td>{{ $news->creator }}</td>
                        <td>{{ $news->title }}</td>
                        <td>
                            <a href="/dashboard/news/{{ $news->id }}" class="badge bg-warning border-0">Detail</a>
                            <a href="/dashboard/news/{{ $news->id }}/edit" class="badge bg-warning border-0">Edit</a>
                            <form action="/dashboard/news/{{ $news->id }}" method="post" class="d-inline">
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
                {{ $newses->links() }}
            </div>
        </div>
    </div>
@endsection
