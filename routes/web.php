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

Route::get('/', function () {
    return view('home');

});

Route::get('/about', function () {
    return view('about' , [
        "definisi" => " ASIPS (Aplikasi Surveilans & informasi Pencegahan Stunting) adalah aplikasi tepat guna yang 
        dapat menghubungkan antara kader posyandu dengan pihak puskesmas dan orang tua dalam 
        pencatatan status gizi balita sebagai upaya pencegahan stunting. 
        Aplikasi ini bertujuan untuk melacak, mencatat dan merekam status gizi balita secara 
        tepat, cepat dan sesuai dengan pengukuran di masing - masing posyandu. 
        Sehingga jika ada balita yang terindikasi mengalami STUNTING maka langsung terlihat pada rekap 
        laporan yang ada pada masing – masing posyandu."
    ]);

});

Route::get('/news', function () {
    return view('news');

});

Route::get('/login', function () {
    return view('login');

});




Route::get('ASIPSController', 'App\Http\Controllers\ASIPSController@index');