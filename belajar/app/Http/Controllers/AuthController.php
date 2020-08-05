<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        $namadepan = '';
        $namabelakang = '';
        return view('/register', ['nama_depan' => $namadepan, 'nama_belakang' => $namabelakang]);
    }

    public function welcome(Request $request){
        $namadepan = $request->input('nama_depan');
        $namabelakang = $request->input('nama_belakang');
        return view('/welcome', ['nama_depan' => $namadepan, 'nama_belakang' => $namabelakang]);
    }
}
