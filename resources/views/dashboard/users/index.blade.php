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
            <h5 class="card-title" id="fontheader">Manajemen User</h5>
            <p class="card-text" id="fontp">Seluruh user terdapat di tabel ini</p>
            <div class="row">
                <div class="col-9">
                    <form action="/dashboard/users">
                        <div class="input-group mb-3 fontlink">
                            <input type="text" class="form-control" placeholder="Cari Berdasarkan Nama" name="search"
                                value="{{ request('search') }}">
                            <button class="btn btn-primary" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
                <div class="col-3">
                    <a href="/dashboard/users/create" class="btn text-white bg-primary border-0">+ Tambah Akun Baru</a>
                </div>
            </div>
            <table class="table table-hover fontlink">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col">No. Tlp</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($users as $key => $user)
                            <td>{{ $user->nama }}</td>
                            <td>{{ $user->nip }}</td>
                            <td>{{ $user->jabatan }}</td>
                            <td>{{ $user->no_tlp }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="/dashboard/users/{{ $user->id }}/edit"
                                    class="badge bg-warning border-0">Edit</a>
                                <form action="/dashboard/users/{{ $user->id }}" method="post" class="d-inline">
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
                    {{ $users->links() }}
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            @spiunib
        </div>
    </div>
@endsection
