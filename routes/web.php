<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// 1. Beranda: array fitur dan statistik dikirim dari route ke view
Route::get('/', function () {
    $fitur = [
        ['judul' => 'Routing elegan',    'isi' => 'Definisikan URL dalam satu baris yang mudah dibaca dan dirawat.'],
        ['judul' => 'Blade templating',  'isi' => 'Layout, komponen, dan sintaks template yang bersih serta aman.'],
        ['judul' => 'Eloquent ORM',      'isi' => 'Bekerja dengan database lewat model, tanpa menulis SQL mentah.'],
        ['judul' => 'Artisan CLI',       'isi' => 'Generate controller, model, dan migration hanya dengan satu perintah.'],
    ];
    $statistik = [
        ['angka' => '3', 'label' => 'Route custom'],
        ['angka' => '4', 'label' => 'Blade view'],
        ['angka' => '1', 'label' => 'Controller'],
        ['angka' => '1', 'label' => 'Model + migration'],
    ];
    return view('home', ['judul' => 'Beranda', 'fitur' => $fitur, 'statistik' => $statistik]);
});

// 2. About: array profil dan teknologi dikirim dari route
Route::get('/about', function () {
    $profil = [
        ['label' => 'Nama',   'isi' => 'Metha Flora Cytra Simatupang'],
        ['label' => 'Kampus', 'isi' => 'Universitas Negeri Medan (UNIMED)'],
        ['label' => 'Prodi',  'isi' => 'Ilmu Komputer'],
        ['label' => 'Tugas',  'isi' => 'Tugas Rutin 9 - Setup Laravel'],
    ];
    $teknologi = ['Laravel', 'PHP', 'MySQL', 'Blade', 'Tailwind CSS', 'Composer'];
    return view('about', ['judul' => 'Tentang', 'profil' => $profil, 'teknologi' => $teknologi]);
});

// 3. Contact: ditangani controller hasil make:controller
Route::get('/contact', [PageController::class, 'contact']);

// Bonus: route parameter
Route::get('/hello/{nama}', function (string $nama) {
    return view('hello', ['judul' => 'Hello', 'nama' => $nama]);
});
