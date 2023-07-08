<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class productsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            'categories_id'=>'1',
            'subcategories_id'=>'1',
            'name'=>'Hitachi Wheelchair',
            'description'=>'Good Stregnth',
            'manufacture_id'=>'1',
            'quantity'=>'5',
            'wholesale_price'=>'5000',
            'selling_price'=>'8999',
            'last_sold_date'=>'2022-01-01',
            'expiry_date'=>'2022-02-02',
            'expiry_status'=>'1',
            'restock_threshold'=>'3',
        ]);

        DB::table('products')->insert([
            'categories_id'=>'1',
            'subcategories_id'=>'2',
            'name'=>'Hitachi Crutches',
            'description'=>'Stainless Steel',
            'manufacture_id'=>'1',
            'quantity'=>'5',
            'wholesale_price'=>'5000',
            'selling_price'=>'8999',
            'last_sold_date'=>'2022-01-01',
            'expiry_date'=>'2022-02-02',
            'expiry_status'=>'1',
            'restock_threshold'=>'3',
        ]);

        DB::table('products')->insert([
            'categories_id'=>'2',
            'subcategories_id'=>'3',
            'name'=>'Paracetamol',
            'description'=>'A whole pack',
            'manufacture_id'=>'2',
            'quantity'=>'5',
            'wholesale_price'=>'5000',
            'selling_price'=>'8999',
            'last_sold_date'=>'2022-01-01',
            'expiry_date'=>'2022-02-02',
            'expiry_status'=>'1',
            'restock_threshold'=>'3',
        ]);

        DB::table('products')->insert([
            'categories_id'=>'2',
            'subcategories_id'=>'2',
            'name'=>'Bran Bread',
            'description'=>'Tasty Wholewheat',
            'manufacture_id'=>'3',
            'quantity'=>'5',
            'wholesale_price'=>'5000',
            'selling_price'=>'8999',
            'last_sold_date'=>'2022-01-01',
            'expiry_date'=>'2022-02-02',
            'expiry_status'=>'1',
            'restock_threshold'=>'3',
        ]);
    }
}
