<?php

use App\Models\Siswa;
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

// Route::get('siswa', function () {
//     return siswa::all();
// });

// Route::get('daftarsiswa', function () {
//     return view('daftar-siswa');
// });


// Route::get('daftarwarga', function () {
//     return view('daftar-warga');
// });

// Route::get('daftarktp', function () {
//     return view('daftar-ktp');
// });

// relasi 1 - one to one
Route::get('relasi-1', function () {
    # Temukan mahasiswa dengan NIM 1015015072
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', '1015015072')->first();

    # Tampilkan nama wali mahasiswa
    return $mahasiswa->wali->nama;

});

// relasi 2 - one to many
Route::get('relasi-2', function () {
    # Temukan mahasiswa dengan NIM 1015015088
    $mahasiswa = App\Models\Mahasiswa::where('nim', '=', '1015015088')->first();

    # Tampilkan nama dosen dari mahasiswa yang dipilih
    return $mahasiswa->dosen->nama;

});

Route::get('relasi-3', function () {
    #temukan dosen yang bernama yulianto
    $dosen = App\Models\Dosen::where('nama', '=', 'Yulianto')->first();

    #tampilkan seluruh data mahasiswa dari dosen yang dipilih
    foreach ($dosen->mahasiswa as $data){
        echo "<li>Nama : <strong>" . $data->nama . "</strong> - " . $data->nim . "</li>";
    }
});

// relasi many to many
Route::get('relasi-4', function () {
    #bila kita ingin melihat hobi saya
    $novay = App\Models\Mahasiswa::where('nama', '=', 'Noviyanto Rachmadi')->first();

    #tampilkan seluruh hobi si novay
    foreach ($novay->hobi as $data) {
        echo '<li>' . $data->hobi . '</li>';
    }
});

Route::get('relasi-5', function () {
    #temukan hobi mandi hujan
    $mandi_hujan = App\Models\Hobi::where('hobi', '=', 'Mandi Hujan')->first();

    #tampilkan semua mahasiswa yang punya hobi mandi hujan
    foreach ($mandi_hujan->mahasiswa as $data) {
        echo '<li> Nama : ' . $data->nama . ' <strong>' . $data->nim . '</strong></li>';
    }

});

Route::get('eloquent', function () {
    #ambil semua data mahasiswa (lengkap dengan semua relasi yang ada)
    $mahasiswa = App\Models\Mahasiswa::with('wali', 'dosen', 'hobi')->get();

    #kirim variabel ke View
    return view('eloquent', compact('mahasiswa'));
});
