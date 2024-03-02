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
                        'target' => $val->no_hp,
                        'message' => "HALLO $val->nama_pelanggan, LAUNDY KAMU UDAH SIAP NIH.\nBERIKUT RINCIAN LAUNDRY ANDA:\n\nhari tanggal : $val->created_at\nBerat        :  $val->berat_cucian\ntotal bayar  : $val->total_bayar  ",
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
