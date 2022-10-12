<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LandingController extends Controller
{
    //Homepage
    public function index()
    {
        return view('landing.index', [
            'active' => 'index',
        ]);
    }
    public function report()
    {
        return view('landing.reports.index', [
            'active' => 'report',
        ]);
    }
    public function news()
    {
        return view('landing.news.index', [
            'active' => 'news',
        ]);
    }
    public function newsdetails()
    {
        return view('landing.news.details', [
            'active' => 'news',
        ]);
    }
    public function profile()
    {
        return view('landing.profile.index', [
            'active' => 'profile',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storereport(Request $request)
    {
        $validatedData = $request->validate([
            'pelapor' => 'required',
            'kategori' => 'required',
            'judul' => 'required',
            'unitkerja' => 'required',
            'isilaporan' => 'required',
            'nama_gambar' => 'image|file|max:50000',
        ]);
        $validatedData['email'] = $request['email'];
        $validatedData['nohp'] = $request['nohp'];
        $validatedData['link'] = $request['link'];

        if ($request->file('lampiran')) {
            $validatedData['lampiran'] = $request->file('lampiran')->store('reports');
        }

        Report::create($validatedData);

        return redirect('/report')->with('success', 'Laporan telah ditambahkan.');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('landing.login', [
                'active' => 'login',
            ]);
        }
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()
                ->intended('/dashboard')
                ->with('success', 'Selamat Datang di Dashboard SPI UNIB!');
        }

        return back()->with('loginError', 'E-mail/Password Anda Salah, Coba Lagi!');
    }
}
