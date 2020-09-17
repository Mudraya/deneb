<?php

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
                'name' => 'Фрукты',
                'name_en' => 'Fruits',
                'code' => 'fruits',
                'description' => 'Подарочные коробочки с фруктами к вашим услугам!',
                'description_en' => 'Gift boxes with fruits for your pleasure!',
                'image' => 'categories/fruits.png',
                'svg' => 'svg/pineapple.svg',
            ],
            [
                'name' => 'Шоколад',
                'name_en' => 'Chocolate',
                'code' => 'chocolate',
                'description' => 'Подарочные коробочки с шоколадками к вашим услугам!',
                'description_en' => 'Gift boxes with chocolate for your pleasure!',
                'image' => 'categories/chocolate.jpg',
                'svg' => 'svg/chocolate.svg',
            ],
            [
                'name' => 'Макаруны',
                'name_en' => 'Macarons',
                'code' => 'macarons',
                'description' => 'Подарочные коробочки с макарунами к вашим услугам!',
                'description_en' => 'Gift boxes with macarons for your pleasure!',
                'image' => 'categories/macarons.jpg',
                'svg' => 'svg/macaron.svg',
            ],
            [
                'name' => 'Рахат-лукум',
                'name_en' => 'Turkish Delight',
                'code' => 'rahatlukum',
                'description' => 'Подарочные коробочки с рахат-лукумом к вашим услугам!',
                'description_en' => 'Gift boxes with turkish delights for your pleasure!',
                'image' => 'categories/turkish.jpg',
                'svg' => 'svg/rahatlukum.svg',
            ],
        ]);
    }
}
