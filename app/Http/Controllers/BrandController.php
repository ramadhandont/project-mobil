<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandController extends Controller
{
    //
        
    public function index($nama){
 
    	return $nama;
 
    }
    public function input(){
 
        return view('inputBrand');
 
    }
 
     public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;
    }
}
