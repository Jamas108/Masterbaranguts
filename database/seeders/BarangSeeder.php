<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'KRS01',
                'nama_barang' => 'Kursi',
                'harga_barang'=> '12000',
                'deskripsi_barang' => 'Kursi untuk ruang tamu',
                'satuan_id' => 36,
            ],
            [
                'kode_barang' => 'SF01',
                'nama_barang' => 'Sofa',
                'harga_barang'=> '100000',
                'deskripsi_barang' => 'Sofa untuk ruang tamu',
                'satuan_id' => 40,
            ],
        ]);
    }
}
