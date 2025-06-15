<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Adopsi;
use App\Models\Hewan;
use App\Models\Pengguna;

class AdopsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Memastikan ada data hewan dan pengguna
 
        $adopsi = [
            [
                'hewan_id' =>1, // ID hewan pertama
                'pengguna_id' => 1,
                'status' => 'Disetujui',
                'created_at' => now()->subDays(5),
                'updated_at' => now()->subDays(3)
            ],
            [
                'hewan_id' => 2,
                'pengguna_id' => 2,
                'status' => 'Menunggu Konfirmasi',
                'created_at' => now()->subDays(2),
                'updated_at' => now()->subDays(2)
            ],
            [
                'hewan_id' => 3,
                'pengguna_id' => 3,
                'status' => 'Ditolak',
                'created_at' => now()->subDays(10),
                'updated_at' => now()->subDays(8)
            ],
            [
                'hewan_id' => 4,
                'pengguna_id' => 4,
                'status' => 'Menunggu Konfirmasi',
                'created_at' => now()->subDay(),
                'updated_at' => now()->subDay()
            ],
        ];
$adopsi = array_map(function ($item) {
            return array_merge($item, [
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }, $adopsi);

        Adopsi::insert($adopsi);
        
        // Jika ingin menambahkan lebih banyak data, bisa dilakukan di sini
        // Misalnya, menggunakan factory atau manual seperti di atas
        
}
}
