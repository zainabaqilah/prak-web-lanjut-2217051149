<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Zainab Aqilah',
            'kelas' => 'C',
            'npm' => '2217051149'
        ];

        return view('profile', $data);
    }
}