<?php

use Illuminate\Database\Seeder;

class PreapoderadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('preapoderados')->insert([
            'preapod_tipodocumento' => '0',
            'preapod_identificacion' => '70327395',
            'preapod_ape' => 'cubas bravo',
            'preapod_nom' => 'carlos',
            'preapod_nacion_id' => '5',
            'preapod_sexo' => '1',
            'preapod_fnac' => '2020-02-11',
            'preapod_est' => '1',
            'preapod_email' => 'joqtan.jr@gmail.com',
            'preapod_tel' => '987654321'
        ]);
        DB::table('preapoderados')->insert([
            'preapod_tipodocumento' => '0',
            'preapod_identificacion' => '72458956',
            'preapod_ape' => 'Palomino Rojas',
            'preapod_nom' => 'Alvaro',
            'preapod_nacion_id' => '4',
            'preapod_sexo' => '1',
            'preapod_fnac' => '2020-04-11',
            'preapod_est' => '0',
            'preapod_email' => 'prueba.jr@gmail.com',
            'preapod_tel' => '875489652'
        ]);
    }
}
