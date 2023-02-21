<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('buku')->insert([
            'kodebuku' => 'D01',
            'judul' => 'Cinta Yang Tak Terbalas',
            'pengarang' => 'Devi Budianti',
            'penerbit' => 'Unisba',
            'created_at' => new \DateTime,
            'updated_at' => new \DateTime,
        ]);
    }
}
