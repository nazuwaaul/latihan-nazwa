<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // SiswaSeeder::class,
            // WargaSeeder::class,
            // KtpSeeder::class,
            RelasiSeeder::class,
        ]);
        $this->command->info('SeederRelasi berhasil.');
    }
}
