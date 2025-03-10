<?php

namespace App\Http\Controllers\Api;

use App\Models\Deposit;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepositController extends Controller
{

    public function index()
    {
        $total = Deposit::sum('mount');
        $total_male = Deposit::join('users', 'deposits.users_id', '=', 'users.id')
            ->where('users.genders', 'male')
            ->sum('deposits.mount');
        $total_female = Deposit::join('users', 'deposits.users_id', '=', 'users.id')
            ->where('users.genders', 'female')
            ->sum('deposits.mount');

        $male_names = Deposit::join('users', 'deposits.users_id', '=', 'users.id')
            ->where('users.genders', 'male')
            ->distinct()
            ->pluck('users.name');

        $female_names = Deposit::join('users', 'deposits.users_id', '=', 'users.id')
            ->where('users.genders', 'female')
            ->distinct()
            ->pluck('users.name');

        $dataUser = [

            'total' => $total,
            'total_male' => $total_male,
            'total_female' => $total_female,
            'male_names' => $male_names,
            'female_names' => $female_names,
        ];

        return response()->json([
            "status" => 200,
            "message" => "success",
            "data" => $dataUser,
        ]);
    }

    public function history()
    {
        $deposits = Deposit::join('users', 'deposits.users_id', '=', 'users.id')
            ->select('deposits.*', 'users.name') // Ambil kolom yang diperlukan
            ->orderBy('deposits.created_at', 'desc') // Urutkan berdasarkan waktu terbaru
            ->get();


        return response()->json([
            "status" => 200,
            "data" => $deposits
        ]);
    }
}
