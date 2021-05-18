<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'kategori' => 'Gorengan',
            'keterangan' => 'Goreng Pisang',
        ];
        Kategori::create($data);
    }
}
