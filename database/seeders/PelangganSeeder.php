<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'pelanggan' => 'Budi',
            'alamat' => 'Jl. Satria IV no.134',
            'telp' => '08961805111',
        ];
        Pelanggan::create($data);
    }
}
