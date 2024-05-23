<?php

namespace App\Console\Commands;

use App\Models\Pelanggan;
use Carbon\Carbon;
use Illuminate\Console\Command;

class SendNotif extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-notif';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {

        $pelanggan = Pelanggan::where('status_ambil', 0)->get();
        foreach ($pelanggan as $val) :
            if ($val->waktu_ambil < Carbon::now()) {
                $curl = curl_init();
                $layanan = $val->layanan->nama_layanan;
                $totalBayar = number_format($val->total_bayar);
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
                        'target' => '089694273720',
                        'message' => "
*Invoice Laundry Rizal*

Kepada Yth. $val->nama_pelanggan

*Tanggal Masuk :*
$val->created_at

*Berat :*
$val->berat_cucian Kg

*Total Bayar:* 
Rp. $totalBayar

*Detail Layanan:*
$layanan

*Catatan:*

Notifikasi ini dikirim otomatis dari Rizal Laundry.

Terima kasih atas kepercayaan Anda kepada Rizal Laundry!

---",
                        'typing' => false,
                        'countryCode' => '62',
                    ),
                    CURLOPT_HTTPHEADER => array(
                        'Authorization: g8BBQ_nJCW@Ch_v4Earo'
                    ),
                ));
                $response = curl_exec($curl);
                curl_close($curl);
                $this->info($response);
            }


        endforeach;
    }
}
