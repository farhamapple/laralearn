<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post; // Model Post

class PostController extends Controller
{
    //
    public function show($param){
        $posts = array(
            'postingan-pertama' => 'Hai saya postingan pertama',
            'postingan-kedua'   => 'Sekarang kita coba mencontohkan memanggil postingan ke 2'
        );

        if(! array_key_exists($param, $posts)){
            abort(404, 'Maa, Postingan yang dicari Tidak ada');
        }

        return view('post')->with([
            'post' => $posts[$param]
        ]);

    }

    // Penggunaan Query Builder diluar namespace php
    public function viewDatabase($nama_login){
        $rs = DB::table('daftar_pengguna')->where('nama_login', $nama_login)->first();

       // dd($rs);

        if($rs == null){
            abort(404, 'Maaf, Data yang anda cari tidak ketemu');
        }

        return view('viewDatabase')->with([
            'post' => $rs
        ]);
    }

    public function eloquentDatabase($slug){
       $rs = Post::where('slug', $slug)->firstOrFail();


        // if($rs == null){
        //     abort(404, 'Maaf, Data yang anda cari tidak ketemu');
        // }

        return view('eloquentdatabase')->with([
            'post' => $rs
        ]);
    }


}
