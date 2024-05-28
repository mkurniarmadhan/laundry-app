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



        $pelanggan = Pelanggan::all()->sortBy(['layanan_id', 'asc']);

        $layanan = Layanan::all();
        return view('pelanggan.index', compact('pelanggan', 'layanan'));
    }


    public function create(Request $request)
    {

        $carbon = Carbon::now()->isoFormat('dddd, D MMMM Y h:mm');
        $waktu_ambil = Carbon::now()->addHour($request->waktu)->isoFormat('dddd, D MMMM Y h:mm');

        $total_bayar =     number_format($request->total_bayar);
        $pelanggan = new Pelanggan();

        if ($request->bayar == 'Bayar Sekarang') {
            $pelanggan->status_bayar = 1;
        };


        $pelanggan->waktu_ambil = Carbon::now()->addHour($request->waktu);

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
                'message' => "HALLO $request->nama_pelanggan, TERIMA KASIH TELAH MENGGUNAKAN JASA LAUNDRY DARI KAMI.\nBERIKUT RINCIAN LAUNDRY ANDA:\n Tanggal Masuk : $carbon\n Tanggal ambil : $waktu_ambil\nNama        :  $request->nama_pelanggan\nBerat        :  $request->berat_cucian KG\ntotal bayar  : Rp. $total_bayar  ",
                'countryCode' => '62',
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: @YbJ9!TRchtqpT3yxxfm'
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
        $pelanggan->waktu_ambil = \Carbon\Carbon::now()->subDay(1);

        $pelanggan->save();


        $layanan = $pelanggan->layanan->nama_layanan;
        $totalBayar = number_format($pelanggan->total_bayar);

        $tanggal_masuk = Carbon::parse($pelanggan->created_at)->isoFormat('dddd, D MMMM Y h:mm');

        $tanggal_ambil =  Carbon::parse($pelanggan->waktu_ambil)->isoFormat('dddd, D MMMM Y h:mm');



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
                'target' => $pelanggan->no_hp,
                'message' => "
            
*Invoice Laundry Rizal*

Kepada Yth. $pelanggan->nama_pelanggan

*Tanggal Masuk :*
$tanggal_masuk

*Tanggal Ambil :*
$tanggal_ambil

*Berat :*
$pelanggan->berat_cucian Kg

*Total Bayar:* 
Rp. $totalBayar

*Detail Layanan:*
$layanan

*Catatan:*

Notifikasi ini dikirim otomatis dari Rizal Laundry.

Terima kasih atas kepercayaan Anda kepada Rizal Laundry!

---
                ",
                'countryCode' => '62',
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: @YbJ9!TRchtqpT3yxxfm'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);


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
