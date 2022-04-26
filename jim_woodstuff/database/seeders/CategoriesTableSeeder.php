<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id'=>1,
                'nom'=>'Ustensiles de cuisines',
                'description'=>'Pratique pour faire la cuisine',
            ],
            [
                'id'=>2,
                'nom'=>'Bijoux',
                'description'=>'Pour se faire beau',
            ]
        ]);
    }
}
