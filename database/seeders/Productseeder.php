<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Productseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'code'=>'bc00224',
            'name'=>'yakult',
            'price'=> 11000
        ]);
        Product::create([
            'code'=>'df20009',
            'name'=>'pepsi99 320ml',
            'price'=> 29000
        ]);
         Product::create([
            'code'=>'pg98789',
            'name'=>'mie indomie',
            'price'=> 3000
        ]);
        Product::create([
            'code'=>'mjfrgo00',
            'name'=>'mie sedap',
            'price'=> 3000
        ]);
        Product::create([
            'code'=>'mghfr5go00',
            'name'=>'golda',
            'price'=> 3000
        ]);
    }
}
