<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LayananController extends Controller
{

    public function index()
    {

        $layanan = Layanan::all();


        return view('layanan.index', compact('layanan'));
    }


    public function store(Request $request)
    {

        $layanan = new Layanan();

        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->harga_layanan = $request->harga_layanan;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->waktu = $request->waktu;
        $layanan->save();

        return back();
    }

    public function update(Request $request, Layanan $layanan)
    {




        $layanan->nama_layanan = $request->nama_layanan;
        $layanan->harga_layanan = $request->harga_layanan;
        $layanan->deskripsi = $request->deskripsi;
        $layanan->waktu = $request->waktu;

        $layanan->save();

        return back();
    }
}
