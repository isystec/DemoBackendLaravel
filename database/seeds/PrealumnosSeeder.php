<?php

use Illuminate\Database\Seeder;

class PrealumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prealumnos')->insert([
            'prealum_tipo_documento'=> '1',
            'prealum_identificacion'=> '70327584',
            'prealum_ape'=> 'cubas sandoval',
            'prealum_nom'=> 'jair',
            'prealum_nacionalidad_id'=> '3',
            'prealum_sexo'=> '1',
            'prealum_fnac'=> '2020-07-14',
            'prealum_gradopostula'=> '6',
            'prealum_est'=> '1'
        ]);
        DB::table('prealumnos')->insert([
            'prealum_tipo_documento'=> '1',
            'prealum_identificacion'=> '70337584',
            'prealum_ape'=> 'Palomino chunga',
            'prealum_nom'=> 'kevin',
            'prealum_nacionalidad_id'=> '4',
            'prealum_sexo'=> '1',
            'prealum_fnac'=> '2020-03-14',
            'prealum_gradopostula'=> '5',
            'prealum_est'=> '1'
        ]);
        DB::table('prealumnos')->insert([
            'prealum_tipo_documento'=> '1',
            'prealum_identificacion'=> '70358462',
            'prealum_ape'=> 'Lezacano Figueroa',
            'prealum_nom'=> 'Axel',
            'prealum_nacionalidad_id'=> '4',
            'prealum_sexo'=> '1',
            'prealum_fnac'=> '2020-03-14',
            'prealum_gradopostula'=> '5',
            'prealum_est'=> '1'
        ]);
        DB::table('prealumnos')->insert([
            'prealum_tipo_documento'=> '1',
            'prealum_identificacion'=> '75486235',
            'prealum_ape'=> 'Sandoval Castro',
            'prealum_nom'=> 'Milagros',
            'prealum_nacionalidad_id'=> '3',
            'prealum_sexo'=> '0',
            'prealum_fnac'=> '2020-03-14',
            'prealum_gradopostula'=> '5',
            'prealum_est'=> '1'
        ]);
    }
}
