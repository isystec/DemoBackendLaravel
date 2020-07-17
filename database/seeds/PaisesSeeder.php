<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paises')->insert([
            'pais_nombre' => 'Afganistán'
        ]);

        DB::table('paises')->insert([
            'pais_nombre' => 'Islas Gland'
        ]);

        DB::table('paises')->insert([
            'pais_nombre' => 'Albania'
        ]);

        DB::table('paises')->insert([
            'pais_nombre' => 'Alemania'
        ]);

        DB::table('paises')->insert([
            'pais_nombre' => 'Andorra'
        ]);
    }
}
