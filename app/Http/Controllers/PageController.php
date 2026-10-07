<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function contact()
    {
        // Ganti dengan datamu sendiri
        $kontak = [
            ['label' => 'Email',     'nilai' => 'simatupangmethafloracytra@gmail.com', 'href' => 'mailto:simatupangmethafloracytra@gmail.com'],
            ['label' => 'GitHub',    'nilai' => 'github.com/simatupangmethafloracytra-glitch', 'href' => 'https://github.com/simatupangmethafloracytra-glitch'],
            ['label' => 'Instagram', 'nilai' => 'thaasim_3', 'href' => 'https://instagram.com/thaasim_3'],
        ];

        return view('contact', ['judul' => 'Kontak', 'kontak' => $kontak]);
    }
}
