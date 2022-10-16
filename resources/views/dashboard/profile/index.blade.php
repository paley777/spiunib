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
            <h5 class="card-title" id="fontheader">Profil Anda</h5>
            <p class="card-text" id="fontp"></p>
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
                        <td>{{ Auth::user()->nama }}</td>
                        <td>{{ Auth::user()->nip }}</td>
                        <td>{{ Auth::user()->jabatan }}</td>
                        <td>{{ Auth::user()->no_tlp }}</td>
                        <td>{{ Auth::user()->email }}</td>
                        <td>
                            <a href="/dashboard/users/{{ Auth::user()->id }}/edit"
                                class="badge bg-warning border-0">Edit</a>
                            <form action="/dashboard/users/{{ Auth::user()->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Anda Yakin?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer text-muted">
            @spiunib
        </div>
    </div>
@endsection
