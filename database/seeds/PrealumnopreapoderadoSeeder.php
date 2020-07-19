<?php

use Illuminate\Database\Seeder;

class PrealumnopreapoderadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prealumnos_preapoderados')->insert([
            'prealumn_preapod_prealum_id'=> '1',
            'prealumn_preapod_preapod_id'=> '1'
        ]);
        DB::table('prealumnos_preapoderados')->insert([
            'prealumn_preapod_prealum_id'=> '2',
            'prealumn_preapod_preapod_id'=> '2'
        ]);
    }
}
