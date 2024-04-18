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
    return view('welcome');
});

// Route basic
Route::get('/about', function () {
    return '<h1>Halo</h1>'
        . 'Nama saya Abdu<br>'
        . 'Belajar Laravel, Emang keren.';
});

// buat route basic introduce yourself
Route::get('/Biodata', function () {
    return '<h1>Halo</h1>'
        . 'Nama : Abdu Rifai<br>'
        . 'Umur : 9 Tahun<br>'
        . 'Kelas : 11<br>'
        . 'Sekolah : SMK Assalaam Bandung<br>'
        . 'Cita-Cita : Masuk Surga<br>'
        . '¡Hala Madrid!.';
});

// buat route basic passing data to view
Route::get('/animals', function () {
    $king = "lion";
    $hewan = ["monkey", "dragonfly", "lion", "butterfly", "crocodile"];
    return view('animals_page', compact('king', 'hewan'));
});

// buat route basic passing data to view2
Route::get('buah-buahan', function () {
    $fruit = ["apple", "mango", "avocado", "banana"];
    return view('buah-buahan_page', ['buah' => $fruit]);
});

// route parameter: parameter ditandai dengan {}
Route::get('product/{name}', function ($name) {
    return "produk: $name";
});

// buat sebuah route dengan 3 buah parameter, nama, berat badan, tinggi badan
Route::get('myself/{name}/{bb}/{tb}', function ($name, $bb, $tb) {
    $bmi = $bb / (($tb / 100) *2);
    if ($bmi > 30) {
        $ket = "obesitas";
    } elseif ($bmi > 25) {
        $ket = "kelebihan";
    } elseif ($bmi > 18.5) {
        $ket = "ideal";
    } elseif ($bmi < 18.5) {
        $ket = "kekuarangan berat badan";
    }

    return "Nama : $name<br>"
        . "Berat Badan : $bb<br>"
        . "Tinggi Badan : $tb<br>"
        . "Nilai BMI : $bmi<br>"
        . "Keterangan : $ket";
});
