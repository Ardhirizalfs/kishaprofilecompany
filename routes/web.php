<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', [\App\Http\Controllers\HomeController::class, 'test'])->name('test');
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/kontak', function () {
    return view('kontak');
});


// Tambahkan ini:
Route::post('/contact', function(Request $request) {
    // Validasi
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Simpan ke log/file atau kirim email (saat ini kita hanya log saja)
    \Log::info('Pesan Kontak Masuk', $data);

    // Redirect kembali dengan pesan sukses
    return back()->with('success', 'Terima kasih, pesan Anda sudah kami terima!');
})->name('contact.submit');


