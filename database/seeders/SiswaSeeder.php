<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert([
            'nisn' => '0044355395',
            'nama' => 'Zakia Dahlia',
            'kelas' => 'XII',
            'jurusan' => 'Rpl 1',
            'jeniskelamin' => 'Perempuan',
            'telpon' => '0895620567666'
        ]);
    }
}
