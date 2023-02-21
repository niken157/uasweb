<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('mahasiswa')->insert([
        //     'nama' => 'Niken',
        //     'prodi' => 'Teknik Informatika',
        //     'semester' => '5',
        //     'created_at' => new \DateTime,
        //     'updated_at' => new \DateTime,
        // ]);
        $mhs = new Mahasiswa;
        $mhs->nama = 'Ani';
        $mhs->prodi = 'Siskom';
        $mhs->semester = '5';
        $mhs->created_at = new \Datetime();
        $mhs->updated_at = new \Datetime();
        $mhs->save();
    }
}
