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
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="card-header fontlink text-center">
            Dashboard
        </div>
        <div class="card-body">
            <div class="alert alert-warning mx-5 mt-4">
                <div class="row">
                    <div class="col-9">
                        <h4 class="alert-heading fw-normal" id="fontheader">{{ $news->title }}
                        </h4>
                        <h5 class="fw-light" id="fonlink">Diunggah oleh {{ $news->creator }} pada {{ $news->created_at }}
                        </h5>
                    </div>
                    <div class="col-3 d-flex">
                        <a href="/dashboard/news" id="fontlink">Kembali ke Laman Sebelumnya ></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <p class="" id="fontlink">{!! $news->body !!}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer text-muted">
                @spiunib
            </div>
        </div>
    @endsection
