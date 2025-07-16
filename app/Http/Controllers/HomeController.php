<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
{
    // $services = [
    //     ['icon' => '🪧', 'title' => 'Billboard', 'desc' => 'Pemasangan billboard di berbagai lokasi strategis.'],
    //     ['icon' => '🌃', 'title' => 'Neon Box', 'desc' => 'Desain dan pasang neon box berkualitas.'],
    //     ['icon' => '🪁', 'title' => 'Spanduk & Baliho', 'desc' => 'Layanan spanduk, baliho untuk promosi lokal.'],
    // ];

    // $features = [
    //     ['title' => 'Respon Cepat', 'desc' => 'Kami menjawab pertanyaan Anda dalam hitungan menit.'],
    //     ['title' => 'Konsultasi Gratis', 'desc' => 'Tidak perlu bayar untuk tanya-tanya.'],
    //     ['title' => 'Garansi Kualitas', 'desc' => 'Kami jamin hasil kerja berkualitas.'],
    // ];

    // $gallery = [
    //     '/images/project1.jpg',
    //     '/images/project2.jpg',
    //     '/images/project3.jpg',
    //     '/images/project4.jpg',
    // ];

    return view('home');

}

    public function test() 
    
    {
        return view('test');
    }

}