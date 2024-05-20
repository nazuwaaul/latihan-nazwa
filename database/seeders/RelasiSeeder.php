<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use App\Models\Wali;
use App\Models\Dosen;
use App\Models\Hobi;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class RelasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('mahasiswas')->delete();
        DB::table('walis')->delete();
        //sample data dosen disini
        $dosen = Dosen::create([
            'nama' => 'Yulianto',
            'nipd' => '123456789',
        ]);

        //sample data mahasiswa disini
        # Mahasiswa Pertama bernama Noviyanto Rachmadi. Dengan NIM 1015015072.
        $novay = Mahasiswa::create(array(
            'nama' => 'Noviyanto Rachmadi',
            'nim' => '1015015072',
            'id_dosen' => $dosen->id,
        ));

        # Mahasiswa Kedua bernama Djaffar. Dengan NIM 1015015088.
        $dije = Mahasiswa::create(array(
            'nama' => 'Djaffar',
            'nim' => '1015015088',
            'id_dosen' => $dosen->id,
        ));

        $this->command->info('Dosen telah diisi!');

        # Mahasiswa Ketiga bernama Puji Rahayu. Dengan NIM 1015015078.
        $ayu = Mahasiswa::create(array(
            'nama' => 'Puji Rahayu',
            'nim' => '1015015078',
            'id_dosen' => $dosen->id,
        ));

        $this->command->info('Mahasiswa telah diisi!');

        //sample data wali disini
        # Ciptakan Wali si $novay
        Wali::create(array(
            'nama' => 'Achmad S',
            'id_mahasiswa' => $novay->id,
        ));

        # Ciptakan Wali si $dije
        Wali::create(array(
            'nama' => 'Entahlah',
            'id_mahasiswa' => $dije->id,
        ));

         # Ciptakan wali si $ayu
         Wali::create(array(
            'nama' => 'Arianto',
            'id_mahasiswa' => $ayu->id,
        ));

        $this->command->info('Data mahasiswa dan wali telah diisi!');

        //sample hobi
        DB::table('hobis')->delete();
        DB::table('mahasiswa_hobi')->delete();

        $mandi_hujan = Hobi::create(['hobi' => 'Mandi Hujan']);
        $baca_buku = Hobi::create(['hobi' => 'Baca Buku']);

        //melampirkan hobi ke mahasiswa
        $novay->hobi()->attach($mandi_hujan->id);
        $novay->hobi()->attach($baca_buku->id);
        $dije->hobi()->attach($mandi_hujan->id);
        $ayu->hobi()->attach($baca_buku->id);

        $this->command->info('Data hobi telah diisi!');

    }
}
