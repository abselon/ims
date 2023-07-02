<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class subcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('subcategories')->insert([
            'categories_id'=>'1',
            'name'=>'Wheelchairs',
            'description'=>'Can be of many kind',
        ]);

        DB::table('subcategories')->insert([
            'categories_id'=>'1',
            'name'=>'Crutches',
            'description'=>'Can be of many kind',
        ]);

        DB::table('subcategories')->insert([
            'categories_id'=>'2',
            'name'=>'Painkillers',
            'description'=>'Can be of many kind',
        ]);

        DB::table('subcategories')->insert([
            'categories_id'=>'2',
            'name'=>'Vitamins',
            'description'=>'Can be of many kind',
        ]);

    }
}
