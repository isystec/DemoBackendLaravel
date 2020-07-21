<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             PaisesSeeder::class,
             PreapoderadosSeeder::class,
             PrealumnosSeeder::class,
             PrealumnopreapoderadoSeeder::class,
             RoleSeeder::class,
             UserSeeder::class,
             RoleUserSeeder::class
         ]);
    }
}
