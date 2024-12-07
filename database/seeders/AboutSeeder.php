<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\About;
use Illuminate\Support\Str;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'judul_website' => 'Joki Axel',
            'logo' => 'https://cdn1.iconfinder.com/data/icons/google-s-logo/150/Google_Icons-09-512.png',
            'deskripsi' => 'Keren Jir',
            'alamat' => 'Jln. DI panjaitan',
            'email' => 'bejir@gmail.com',
            'telepon' => '+62 133 123 123',
            'created_at' => '2024-12-05 08:54:36',
            'updated_at' => '2024-12-05 08:54:37',
            'atas_nama' => 'axl',
            'no_rekening' => '091929192112',
        ]);
    }
}
