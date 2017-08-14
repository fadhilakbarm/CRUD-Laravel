<?php

use Illuminate\Database\Seeder;

class DataAbsensiDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('absensi')->insert([
            	'nama' => 'fadhil',
                'jam_masuk' => '06.0'.$i,
                'jam_pulang' => '16.0'.$i,
                'keterangan' => 'tepat waktu',
            ]);
        }
    }
}
