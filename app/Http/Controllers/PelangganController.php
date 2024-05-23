<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use App\Models\Pelanggan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PelangganController extends Controller
{
    public function index()
    {

        $jam_24 = [1, 4, 7];
        $jam_6 = [2, 8, 5];
        $jam_3 = [3, 6, 9];
        $pelanggan = Pelanggan::all()->sortBy(['layanan_id', 'asc']);

        $layanan = Layanan::all();
        return view('pelanggan.index', compact('pelanggan', 'layanan'));
    }


    public function create(Request $request)
    {

        $carbon = Carbon::now();

        $total_bayar =     number_format($request->total_bayar);
        $pelanggan = new Pelanggan();

        if ($request->bayar == 'Bayar Sekarang') {
            $pelanggan->status_bayar = 1;
        };
        if (in_array($request->layanan_id, [3, 6, 9])) {
            $pelanggan->waktu_ambil = Carbon::now()->addHour(3);
        };
        if (in_array($request->layanan_id, [2, 8, 5])) {
            $pelanggan->waktu_ambil = Carbon::now()->addHour(6);
        };
        if (in_array($request->layanan_id, [1, 4, 7])) {
            $pelanggan->waktu_ambil = Carbon::now()->addHour(24);
        };


        $pelanggan->layanan_id = $request->layanan_id;
        $pelanggan->nama_pelanggan = $request->nama_pelanggan;
        $pelanggan->no_hp = $request->no_hp;
        $pelanggan->berat_cucian = $request->berat_cucian;
        $pelanggan->total_bayar = $request->total_bayar;
        $pelanggan->save();


        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'target' => $request->no_hp,
                'message' => "HALLO $request->nama_pelanggan, TERIMA KASIH TELAH MENGGUNAKAN JASA LAUNDRY DARI KAMI.\nBERIKUT RINCIAN LAUNDRY ANDA:\n\nhari tanggal : $carbon\nNama        :  $request->nama_pelanggan\nBerat        :  $request->berat_cucian KG\ntotal bayar  : Rp. $total_bayar  ",
                'countryCode' => '62',
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: g8BBQ_nJCW@Ch_v4Earo'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);



        return back();
    }

    public function confirm(Request $request)
    {

        $pelanggan = Pelanggan::find($request->id_pelanggan);

        $pelanggan->status_ambil = 1;

        $pelanggan->save();

        return back();
    }
    public function confirmBayar(Request $request)
    {

        $pelanggan = Pelanggan::find($request->id_pelanggan);

        $pelanggan->status_bayar = 1;

        $pelanggan->save();

        return back();
    }
}
