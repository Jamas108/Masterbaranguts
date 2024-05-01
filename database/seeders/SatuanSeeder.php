<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuan')->insert([
            [
                'kode_satuan' => 'BH',
                'nama_satuan' => 'Buah',
            ],
            [
                'kode_satuan' => 'SCH',
                'nama_satuan' => 'Sachet',
            ],
            [
                'kode_satuan' => 'PCS',
                'nama_satuan' => 'Pieces',
            ],
            [
                'kode_satuan' => 'BX',
                'nama_satuan' => 'Box',
            ],
            [
                'kode_satuan' => 'UNT',
                'nama_satuan' => 'Unit',
            ],
        ]);
    }
}
