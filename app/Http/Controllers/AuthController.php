<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
    	return view('register');
    }

    public function welcome(Request $request){
    	$nama_depan = $request -> input('nama_depan');
    	$nama_belakang = $request -> input ('nama_belakang');
    	$data = [
    		'depan' => $nama_depan,
    		'belakang' => $nama_belakang, ];
        	return view('selamatdatang', $data);
        }
}
