<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PromoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('promos')->insert([
           'code'=> "pijamti",
           'code'=> 10,
       ]);
    }
}
