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
                'code' => 'fruits',
                'description' => 'Подарочные коробочки с фруктами к вашим услугам!',
                'image' => 'categories/fruits.png',
                'svg' => 'svg/pineapple.svg',
            ],
            [
                'name' => 'Шоколад',
                'code' => 'chocolate',
                'description' => 'Подарочные коробочки с шоколадками к вашим услугам!',
                'image' => 'categories/chocolate.jpg',
                'svg' => 'svg/chocolate.svg',
            ],
            [
                'name' => 'Макаруны',
                'code' => 'macarons',
                'description' => 'Подарочные коробочки с макарунами к вашим услугам!',
                'image' => 'categories/macarons.jpg',
                'svg' => 'svg/macaron.svg',
            ],
            [
                'name' => 'Рахат-лукум',
                'code' => 'rahatlukum',
                'description' => 'Подарочные коробочки с рахат-лукумом к вашим услугам!',
                'image' => 'categories/turkish.jpg',
                'svg' => 'svg/rahatlukum.svg',
            ],
        ]);
    }
}
