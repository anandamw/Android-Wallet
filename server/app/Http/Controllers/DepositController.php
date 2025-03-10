<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DepositController extends Controller
{
    public function index()
    {
        $dataUser = [
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,

        ];


        return view('deposit.create', $dataUser);
    }

    public function insert(Request $request)
    {


        $user = auth()->user();

        // Validasi gender
        if (!in_array($user->genders, ['male', 'female'])) {
            return redirect('/pages')->withErrors(['Invalid gender']);
        }

        // Data yang akan disimpan ke database
        $data = [
            'mount' => (int) preg_replace('/[^0-9]/', '', $request->mount), // Pastikan mount bertipe integer
            'datetime' => \Carbon\Carbon::parse($request->datetime)->format('Y-m-d H:i:s'),
            'users_id' => $user->id,
        ];

        // Format datetime untuk pesan
        $formattedDate = \Carbon\Carbon::parse($request->datetime)->format('d M Y, H:i');

        // Nomor target berdasarkan gender
        $targetPhone = $user->genders === 'male' ? '083137772759' : '087740505052';

        // Format jumlah deposit dengan pemisah ribuan
        $formattedMount = number_format($data['mount'], 0, ',', '.');

        // Pesan berdasarkan gender
        $message = $user->genders === 'male'
            ? "{$formattedDate} Haii Elisachan, AnandaMw telah deposit Rp {$formattedMount}, apakah kamu sudah menyelesaikan misinya juga?"
            : "{$formattedDate} Haiiii AnandaMw, Elisachan telah deposit Rp {$formattedMount}, apakah kamu sudah menyelesaikan misinya juga?";

        // Fungsi untuk mengirimkan pesan
        $response = $this->sendNotification($targetPhone, $message);

        // Jika terjadi error saat mengirim pesan
        if ($response['error']) {
            return redirect('/pages')->withErrors(['error' => $response['message']]);
        }

        // Simpan data deposit
        Deposit::create($data);

        return redirect('/pages')->with('success', 'Deposit created and notification sent successfully!');
    }

    /**
     * Fungsi untuk mengirim notifikasi menggunakan API Fonnte
     */
    private function sendNotification($target, $message)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://api.fonnte.com/send',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => [
                'target' => $target,
                'message' => $message,
                'countryCode' => '62', // optional
            ],
            CURLOPT_HTTPHEADER => [
                'Authorization: t9fzzEQsbCXStiwauPLM',
            ],
        ]);

        $response = curl_exec($curl);
        $error = curl_errno($curl) ? curl_error($curl) : null;
        curl_close($curl);

        return [
            'error' => (bool)$error,
            'message' => $error ?: $response,
        ];
    }


    public function handleWhatsAppCommand(Request $request)
    {
        $user = auth()->user();
        $command = strtolower(trim($request->message)); // Pesan yang diterima dari WhatsApp

        if ($command === '/list') {
            $deposits = Deposit::where('users_id', $user->id)
                ->orderBy('datetime', 'desc')
                ->get();

            if ($deposits->isEmpty()) {
                $message = "Anda belum memiliki riwayat deposit.";
            } else {
                $message = "Riwayat deposit Anda:\n";
                foreach ($deposits as $deposit) {
                    $message .= "- {$deposit->mount} pada " . Carbon::parse($deposit->datetime)->format('d-m-Y H:i') . "\n";
                }
            }

            // Kirimkan hasil riwayat deposit ke nomor WhatsApp user
            return $this->sendNotification($user->phone, $message);
        }

        return response()->json(['message' => 'Perintah tidak dikenali'], 400);
    }
}
