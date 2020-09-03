<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class PendaftaranController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function daftar(Request $request){
        $method = $request->method();
        if($method == "POST"){
            DB::update("INSERT INTO pendaftaran(id,nama,agama,ttl,nik,telp,email,pendidikan) VALUES (?,?,?,?,?,?,?,?)",[
                $request->input('id'),
                $request->input('nama'),
                $request->input('agama'),
                $request->input('ttl'),
                $request->input('nik'),
                $request->input('telp'),
                $request->input('email'),
                $request->input('pendidikan')

            ]);
            return redirect('/');
        }else{
            return redirect('/welcome');
        }
    }

    public function welcome()
    {
        return view('welcome');
    }
}
