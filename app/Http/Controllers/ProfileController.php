<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile() 
    { 
        $data = [
            'nama' => 'Zainab Aqilah',
            'npm' => '2217051149',
            'kelas' => 'C'
        ];

        return view('profile', $data);
    }
}
