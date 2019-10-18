<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //di sini isi controller
    /* */
    public function index(){
        //return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
        
        //single
    	//$nama = "Diki Alfarabi Hadi";
        //return view('biodata',['nama' => $nama]);
        
        // array
    	//$nama = "Diki Alfarabi Hadi";
 
    	//$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
 
    	//return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
        //return view('biodata');
        

        
    	// mengambil data dari table pegawai
    	$brand = DB::table('brand')->get();
 
    	// mengirim data pegawai ke view index
    	return view('index',['brand' => $brand]);
    }
    /* */
    public function tambah()
    {
     
        // memanggil view tambah
        return view('tambah');
     
    }
    // method untuk insert data ke table pegawai
    public function brand(Request $request)
    {
        // insert data ke table pegawai
        DB::table('brand')->insert([
            'brand_nm' => $request->nama
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/product');

    }
    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $brand = DB::table('brand')->where('brand_id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['brand' => $brand]);
    
    }

    // update data pegawai
    public function update(Request $request)
    {
        // update data pegawai
        DB::table('brand')->where('brand_id',$request->id)->update([
            'brand_nm' => $request->nama
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/product');
    }
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('brand')->where('brand_id',$id)->delete();
            
        // alihkan halaman ke halaman pegawai
        return redirect('/product');
    }
}