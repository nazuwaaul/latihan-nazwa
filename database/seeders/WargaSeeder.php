<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Warga::insert([
        'nama' => "Janel Lilio",
        'jenis_kelamin' => 0,
        'alamat' => "jl. bersamamu"
        ]);
        Warga::insert([
            'nama' => "Bambang Yudoyono",
            'jenis_kelamin' => 0,
            'alamat' => "jl. hiduplah"
        ]);
        Warga::insert([
            'nama' => "Liliput",
            'jenis_kelamin' => 1,
            'alamat' => "jl. hahaha"
        ]);
        Warga::insert([
            'nama' => "Kiorea",
            'jenis_kelamin' => 1,
            'alamat' => "jl. hihihi"
        ]);
        Warga::insert([
            'nama' => "Jurgino",
            'jenis_kelamin' => 0,
            'alamat' => "jl. kejayaan"
        ]);
        Warga::insert([
            'nama' => "Maraaaaa",
            'jenis_kelamin' => 0,
            'alamat' => "jl. jaksa"
        ]);
    }
}
