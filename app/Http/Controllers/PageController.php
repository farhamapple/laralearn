<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function home(){
        $tasks = [
            'Pergi Bekerja', 'Pergi Belanja', 'Pergi Sekolah'
        ];

        return view('welcome', [
            'tasks' => $tasks,
            'foo' => 'Baris Baru',
            'param_url' => request('title'),
            'script' => '<script>alert("Alert")</script>'
        ]);
    }

    public function about(){

        return view('about');

    }
}
