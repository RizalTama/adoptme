<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hewan;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hewan = [
            [
                'nama' => 'Luna',
                'jenis' => 'Kucing',
                'usia' => 2,
                'jenis_kelamin' => 'Betina',
                'deskripsi' => 'Luna adalah kucing domestik yang sangat ramah dan suka bermain. Dia memiliki bulu putih yang indah dan mata biru yang menawan.',
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Max',
                'jenis' => 'Anjing',
                'usia' => 1,
                'jenis_kelamin' => 'Jantan',
                'deskripsi' => 'Max adalah anjing Golden Retriever yang energik dan pintar. Dia sangat cocok untuk keluarga dengan anak-anak.',
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Oreo',
                'jenis' => 'Kelinci',
                'usia' => 1,
                'jenis_kelamin' => 'Jantan',
                'deskripsi' => 'Oreo adalah kelinci Dutch yang menggemaskan dengan bulu hitam-putih. Dia sangat jinak dan suka dimanja.',
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Bella',
                'jenis' => 'Kucing',
                'usia' => 3,
                'jenis_kelamin' => 'Betina',
                'deskripsi' => 'Bella adalah kucing Persia yang anggun. Dia memiliki bulu abu-abu yang panjang dan sangat menyukai ketenangan.',
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Rocky',
                'jenis' => 'Anjing',
                'usia' => 2,
                'jenis_kelamin' => 'Jantan',
                'deskripsi' => 'Rocky adalah anjing Siberian Husky yang kuat dan setia. Dia sangat aktif dan membutuhkan banyak aktivitas fisik.',
                'status' => 'Diadopsi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Milo',
                'jenis' => 'Hamster',
                'usia' => 1,
                'jenis_kelamin' => 'Jantan',
                'deskripsi' => 'Milo adalah hamster Syria yang lucu dan lincah. Dia suka bermain di roda hamster dan mengumpulkan makanan.',
                'status' => 'Tersedia',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($hewan as $data) {
            Hewan::create($data);
        }
    }
}
