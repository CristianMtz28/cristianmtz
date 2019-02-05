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
        $this->call(PostsTableSeeder::class);
    }
}


/*

Dentro del método run de DatabaseTableSeeder nos ejecutará todos los seeders que nosotros le pasemos a la función
para ejecutarse y llenar la base de datos


*/
