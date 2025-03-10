<?php

namespace App\Http\Controllers;

use App\Models\Deposit;
use App\Models\User;
use Illuminate\Http\Request;

class HomePageController extends Controller
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
            'name' => auth()->user()->name,
            'total' => $total,
            'total_male' => $total_male,
            'total_female' => $total_female,
            'male_names' => $male_names,
            'female_names' => $female_names,
        ];

        return view('page', $dataUser);
    }



    public function history()
    {
        $data = [
            'deposits' => Deposit::join('users', 'deposits.users_id', '=', 'users.id')
                ->select('deposits.*', 'users.name') // Ambil kolom yang diperlukan
                ->orderBy('deposits.created_at', 'desc') // Urutkan berdasarkan waktu terbaru
                ->get(),
            'name ' => auth()->user()->name,
            'email' => auth()->user()->email,
        ];

        return view('history', $data);
    }



    public function stats()
    {

        $dataUser = [
            'name' => auth()->user()->name,
            'email' => auth()->user()->email,
            'total' => Deposit::join('users', 'deposits.users_id', '=', 'users.id')->sum('deposits.mount'),

            'total_female' =>
            Deposit::join('users', 'deposits.users_id', '=', 'users.id')->where('genders', 'female')->sum('deposits.mount'),
            'total_male' =>
            Deposit::join('users', 'deposits.users_id', '=', 'users.id')->where('genders', 'male')->sum('deposits.mount'),

        ];

        return view('stats', $dataUser);
    }
}
