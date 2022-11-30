@extends('landing.layouts.main2')

@section('container')
    <div style="background-color: #f3f3f3;font-family: ABeeZee, sans-serif;">
        <div class="container py-4 py-xl-5" style="background-color: #ffffff">
            @if (session()->has('loginError'))
                <div class="container">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif
            <div class="card mb-5 mt-5 position-relative top-50 start-50 translate-middle-x"
                style="max-width: 1300px;max-height:100%;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="images\bouncy-security-with-fingerprint-verification.gif" class="img-fluid"
                            style="width: 100%;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" id="fontheader">Portal Administrator SPI UNIB</h5>
                            <p class="card-text" id="fontlink">Hai Admin! Masuk ke dashboard SPI UNIB dengan memasukkan
                                e-mail dan
                                kata sandi di
                                bawah ini.</p>
                            <form method="POST" action="/login" id="fontlink">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">E-mail</label>
                                    <input type="email" name="email" class="form-control"aria-describedby="emailHelp"
                                        required>
                                    <div id="emailHelp" class="form-text">Masukkan e-mail anda.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                        required>
                                </div>
                                <button type="submit" class="btn btn-primary">Masuk</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
