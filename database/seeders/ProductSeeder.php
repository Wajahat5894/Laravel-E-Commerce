<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Oppo Smartphone',
                "price" => "300€",
                "description" => "Ein Smartphone mit vielen Funktionen, welches Ihr Leben verändern wird",
                "category" => "mobile",
                "gallery" => "https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name' => 'Oppo Smartphone',
                "price" => "300€",
                "description" => "Ein Smartphone mit vielen Funktionen, welches Ihr Leben verändern wird",
                "category" => "mobile",
                "gallery" => "https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name' => 'Oppo Smartphone',
                "price" => "300€",
                "description" => "Ein Smartphone mit vielen Funktionen, welches Ihr Leben verändern wird",
                "category" => "mobile",
                "gallery" => "https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
            [
                'name' => 'Oppo Smartphone',
                "price" => "300€",
                "description" => "Ein Smartphone mit vielen Funktionen, welches Ihr Leben verändern wird",
                "category" => "mobile",
                "gallery" => "https://assetscdn1.paytm.com/images/catalog/product/M/MO/MOBOPPO-A52-6-GFUTU6297453D3D253C/1592019058170_0..png"
            ],
        ]);
    }
}
