<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('guru')->insert([
            'id' => 1,
            'id_card' => '12345',
            'nip' => '987654321',
            'nama_guru' => 'Sutrisno',
            'mapel_id' => '1',
            'foto' => 'a.jpg'
        ]);
    }
}
