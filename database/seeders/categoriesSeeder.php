<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class categoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert([
            'name'=>'Medical Equipment',
            'description'=>'Equipment such as wheelchairs',
        ]);

        DB::table('categories')->insert([
            'name'=>'Medicinal Drugs',
            'description'=>'Includes pharmacuetical drugs',
        ]);

        DB::table('categories')->insert([
            'name'=>'Edibles',
            'description'=>'Includes consumer foodstuff',
        ]);
    }
}
