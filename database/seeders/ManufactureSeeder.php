<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ManufactureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('manufacture')->insert([
            'name'=>'Hitachi',
            'description'=>'tech company',
        ]);

        DB::table('manufacture')->insert([
            'name'=>'Panadol',
            'description'=>'paracetamol producer',
        ]);

        DB::table('manufacture')->insert([
            'name'=>'Young',
            'description'=>'bakery and foodstuff',
        ]);
    }
}
