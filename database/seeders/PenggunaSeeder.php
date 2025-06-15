<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Hash;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pengguna = [
            [
                'name' => 'Admin Utama',
                'email' => 'admin@adoptme.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'alamat' => 'Jl. Sudirman No. 123, Jakarta Pusat',
                'umur' => 30,
                'pekerjaan' => 'Administrator',
                'no_telp' => '081234567890',
                'path_foto_ktp' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sarah Johnson',
                'email' => 'sarah.j@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'alamat' => 'Jl. Thamrin No. 45, Jakarta Selatan',
                'umur' => 28,
                'pekerjaan' => 'Dokter Hewan',
                'no_telp' => '082345678901',
                'path_foto_ktp' => 'ktp/sarah-ktp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Budi Santoso',
                'email' => 'budi.s@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'alamat' => 'Jl. Gatot Subroto No. 67, Jakarta Selatan',
                'umur' => 35,
                'pekerjaan' => 'Guru',
                'no_telp' => '083456789012',
                'path_foto_ktp' => 'ktp/budi-ktp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Linda Wijaya',
                'email' => 'linda.w@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'alamat' => 'Jl. Asia Afrika No. 89, Bandung',
                'umur' => 25,
                'pekerjaan' => 'Wiraswasta',
                'no_telp' => '084567890123',
                'path_foto_ktp' => 'ktp/linda-ktp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ahmad Rahman',
                'email' => 'ahmad.r@example.com',
                'password' => Hash::make('password123'),
                'role' => 'user',
                'alamat' => 'Jl. Diponegoro No. 234, Surabaya',
                'umur' => 32,
                'pekerjaan' => 'Arsitek',
                'no_telp' => '085678901234',
                'path_foto_ktp' => 'ktp/ahmad-ktp.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        foreach ($pengguna as $data) {
            try {
                Pengguna::create($data);
            } catch (\Exception $e) {
                echo "Error creating user: " . $e->getMessage() . "\n";
            }
        }
    }
}
