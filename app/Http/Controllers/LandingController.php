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

        if ($request->file('lampiran')) {
            $validatedData['lampiran'] = $request->file('lampiran')->store('reports');
        }

        Report::create($validatedData);

        return redirect('/report')->with('success', 'Laporan telah ditambahkan.');
    }
}
