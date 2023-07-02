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
            'manufacturer'=>'Hitachi',
            'quantity'=>'5',
            'wholesale_price'=>'5000',
            'selling_price'=>'8999',
            'last_sold_date'=>'2022-01-01',
            'expiry_date'=>'2022-02-02',
            'expiry_status'=>'1',
            'restock_threshold'=>'3',
            'discount'=>'200',
            'discount_type'=>'1',
        ]);

        DB::table('products')->insert([
            'categories_id'=>'1',
            'subcategories_id'=>'2',
            'name'=>'Hitachi Crutches',
            'description'=>'Stainless Steel',
            'manufacturer'=>'Hitachi',
            'quantity'=>'5',
            'wholesale_price'=>'5000',
            'selling_price'=>'8999',
            'last_sold_date'=>'2022-01-01',
            'expiry_date'=>'2022-02-02',
            'expiry_status'=>'1',
            'restock_threshold'=>'3',
            'discount'=>'200',
            'discount_type'=>'1',
        ]);

        DB::table('products')->insert([
            'categories_id'=>'2',
            'subcategories_id'=>'3',
            'name'=>'Paracetamol',
            'description'=>'A whole pack',
            'manufacturer'=>'Panadol',
            'quantity'=>'5',
            'wholesale_price'=>'5000',
            'selling_price'=>'8999',
            'last_sold_date'=>'2022-01-01',
            'expiry_date'=>'2022-02-02',
            'expiry_status'=>'1',
            'restock_threshold'=>'3',
            'discount'=>'200',
            'discount_type'=>'1',
        ]);

        DB::table('products')->insert([
            'categories_id'=>'2',
            'subcategories_id'=>'2',
            'name'=>'Bran Bread',
            'description'=>'Tasty Wholewheat',
            'manufacturer'=>'Lousiana',
            'quantity'=>'5',
            'wholesale_price'=>'5000',
            'selling_price'=>'8999',
            'last_sold_date'=>'2022-01-01',
            'expiry_date'=>'2022-02-02',
            'expiry_status'=>'1',
            'restock_threshold'=>'3',
            'discount'=>'200',
            'discount_type'=>'1',
        ]);
    }
}
