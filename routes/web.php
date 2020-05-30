<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Implementasi Controller
Route::get('/', 'PageController@home');

Route::get('/', function () {
    $tasks = [
        'Pergi Bekerja', 'Pergi Belanja', 'Pergi Sekolah'
    ];

    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'Baris Baru',
        'param_url' => request('title'),
        'script' => '<script>alert("Alert")</script>'
    ]);
});

Route::get('/contact', function () {

    $tasks = [
        'Pergi Bekerja', 'Pergi Belanja', 'Pergi Sekolah'
    ];

    // Cara menambahkan data selain melempar array seperti diatas
    return view('contact')->withTasks($tasks);
});

Route::get('about', 'PageController@about');

Route::get('testParameter', function () {

    $tasks = [
        'Pergi Bekerja', 'Pergi Belanja', 'Pergi Sekolah'
    ];


    return view('testparameter')->with([
        'tasks' => $tasks
    ]);
});

Route::get('post/{post}', 'PostController@show');

Route::get('viewdatabase/{nama_login}', 'PostController@viewDatabase');

Route::get('eloquentdatabase/{slug}', 'PostController@eloquentDatabase');

Route::get('/home', function () {
    return view('home');
});
