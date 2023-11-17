<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('mahasiswa', function () {
    return view('mahasiswa');
});

Route::get('about', function () {
    return view('about');
});

Route::get('tabel', function () {
    $npm = [122,124,421];
    $jumlah = count($npm);
    return view('tabel', compact('npm'));
});


//perulangan

Route::get('perulangan', function () {
    //return view('perulangan');
    $mobil_bagus = 1;
    $mobil_rusak = 5;
    $jumlah_mobil = 10;

    while ($mobil_bagus <= $jumlah_mobil) {
        if ($mobil_bagus > $mobil_rusak) {
            echo "mobil ke - " . $mobil_bagus . 'tidak beroperasi dengan baik' . '<br>';
        } else {
        echo "mobil ke - " . $mobil_bagus . 'beroperasi dengan baik' . '<br>';
    }
    $mobil_bagus++;
    }
    echo '<hr>';
    $i = 1;
    while ($i <= 5) {
        echo "mobil ke - " . $i . ' baik' . '<br>';
    $i++;
    }
    for ($i= 6; $i < 11; $i++) { 
        echo "mobile ke - " . $i . ' kurang baik'.'<br>';
    }
    //echo '<hr>';
    //if ($mobil_bagus <= $mobil_rusak) {
    //    echo "mobil ke - " . $mobil_bagus . 'beroperasi dengan baik'.'<br';
//
//    }
    
});