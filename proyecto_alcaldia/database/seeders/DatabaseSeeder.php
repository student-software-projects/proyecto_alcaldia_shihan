<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('localidades')->insert([
            'localidad' => 'Usaquen',
        ]);
        
        DB::table('localidades')->insert([
            'localidad' => 'Chapinero',
        ]);
        
        DB::table('localidades')->insert([
            'localidad' => 'Santa Fe',
        ]);


    }
}
