<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\mahasantuy;

class Mahasantuycontroller extends Controller
{

    public function index()
    {
        //dapatkan seluruh data mahasantuy dengan query builder
        $ar_mahasantuy = DB::table('mahasantuy')->get();
        //arahkan ke halaman baru dengan menyertakan data mahasantuy(compact)
        //di resources/views/mahasantuy/index.blade.php
        return view('mahasantuy.index',compact('ar_mahasantuy'));

    }

    public function jurusan()
    {
        return view('jurusan.jurusan');
    }


    public function create()
    {
        ////mengarahkan ke hal form input
        return view('mahasantuy.form_mahasantuy');
    }


    public function store(Request $request)
    {
        //1. proses validasi data
        $validasi = $request->validate(
        [
            'nim'=>'required|unique:mahasantuy|numeric',
            'nama'=>'required|max:50',
            'jurusan'=>'required|max:50',
            'alamat'=>'required',
            'kota'=>'required',
            'provinsi'=>'required',
            'email'=>'required|max:50|regex:/(.+)@(.+)\.(.+)/i',
        ],
        // menampilkan pesan kesalahan
        [
            'nim.required'=>'NIM Wajib di Isi',
            'nim.unique'=>'NIM Tidak Boleh Sama',
            'nim.numeric'=>'Harus Berupa Angka',
            'nama.required'=>'Nama Wajib di Isi',
            'jurusan.required'=>'jurusan Wajib di Isi',
            'alamat.required'=>'Alamat Wajib di Isi',
            'kota.required'=>'kota Wajib di Isi',
            'provinsi.required'=>'provinsi Wajib di Isi',
            'email.required'=>'Email Wajib di Isi',
            'email.regex'=>'Harus berformat email',
        ],
        );
            //2. proses input data tangkap request dari form input
            DB::table('mahasantuy')->insert(
        [
            'nim'=>$request->nim,
            'nama'=>$request->nama,
            'jurusan'=>$request->jurusan,
            'alamat'=>$request->alamat,
            'kota'=>$request->kota,
            'provinsi'=>$request->provinsi,
            'email'=>$request->email,
        ]
    );
    //2.landing page
    return redirect('/mahasantuy');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }

 
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}