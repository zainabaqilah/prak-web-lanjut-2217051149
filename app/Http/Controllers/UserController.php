<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{   
    public function profile(){

    }
    public function create(){ 
        return view('create_user'); 
    } 
    // public function store(Request $request) 
    // { 
    //     $data = $request->all(); 
    //     dd($data); 
    // } 
    public function store(Request $request){
        $data = [ 
            'nama' => $request->input('nama'), 
            'kelas' => $request->input('kelas'), 
            'npm' => $request->input('npm'), 
        ]; 
        return view('profile', $data); 
    }
}
