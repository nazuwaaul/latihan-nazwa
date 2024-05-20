<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Siswa::insert([
            'nama' => "Nana Julina",
            'jenis_kelamin' => 1,
            'umur' => 16,
            'alamat' => "Jl. Kenangan"
        ]);
        Siswa::insert([
            'nama' => "Emeral jeko",
            'jenis_kelamin' => 0,
            'umur' => 16,
            'alamat' => "Jl. Bunga"
        ]);
        Siswa::insert([
            'nama' => "Jurujian",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Jl. Mekar"
        ]);
        Siswa::insert([
            'nama' => "Luna Irama",
            'jenis_kelamin' => 1,
            'umur' => 16,
            'alamat' => "Jl. Doremi"
        ]);
        Siswa::insert([
            'nama' => "Mikorina Jereji",
            'jenis_kelamin' => 0,
            'umur' => 17,
            'alamat' => "Jl. Budiman"
        ]);
        Siswa::insert([
            'nama' => "Diana Rerenia",
            'jenis_kelamin' => 1,
            'umur' => 15,
            'alamat' => "Jl. Pupus"
        ]);
        Siswa::insert([
            'nama' => "Mikael Julian",
            'jenis_kelamin' => 0,
            'umur' => 15,
            'alamat' => "Jl. Melodi"
        ]);
        Siswa::insert([
            'nama' => "Lolly Laila",
            'jenis_kelamin' => 1,
            'umur' => 15,
            'alamat' => "Jl. Tulip"
        ]);
        Siswa::insert([
            'nama' => "Georgi Hijirah",
            'jenis_kelamin' => 0,
            'umur' => 16,
            'alamat' => "Jl. Rembunan"
        ]);
        Siswa::insert([
            'nama' => "Selestio Marindo",
            'jenis_kelamin' => 1,
            'umur' => 17,
            'alamat' => "Jl. Ronggana"
        ]);
    }
}
