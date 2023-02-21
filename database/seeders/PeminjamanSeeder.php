<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Peminjaman;

class PeminjamanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peminjaman')->insert([
            'nomer' => '1234',
            'nama_peminjam' => 'Nurliana Azizah',
            'id' => '1',
            'keterangan' => 'pinjam',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
