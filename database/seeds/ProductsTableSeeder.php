<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'Фруктовая коробочка Мини',
                'code' => 'fruitbox_mini',
                'category_id' => 1,
                'image' => 'products/mini.jpg',
                'description' => 'Содержит ананас, беби/молодой кокос, маракую, гранадиллу, рамбутаны, тамаринд, кумкват, киви "Gold"',
                'price' => 400,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Фруктовая коробочка Стандарт',
                'code' => 'fruitbox_standart',
                'category_id' => 1,
                'image' => 'products/standart.jpg',
                'description' => 'Содержит только экзотические фрукты. Тайское манго/королевское манго, гранадилла, маракуйя, мангостаны, кумкват, тамаринд',
                'price' => 750,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Фруктовая коробочка Экзотик',
                'code' => 'fruitbox_exotic',
                'category_id' => 1,
                'image' => 'products/ekzotik.jpg',
                'description' => 'Содержит только экзотические фрукты. Ананас беби/молодой кокос, гранадилла, мангостаны, маракуйя, рамбутаны, кумкват, тамаринд.',
                'price' => 650,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Коробка "Розовая мечта"',
                'code' => 'pink_dream',
                'category_id' => 2,
                'image' => 'products/pink_dream.webp',
                'description' => 'Букет из клубники в шоколаде в коробке "Розовая мечта"',
                'price' => 800,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Коробка "Шампанское"',
                'code' => 'strawberry_champagne',
                'category_id' => 2,
                'image' => 'products/champagne.webp',
                'description' => 'Букет из клубники в шоколаде с шампанским',
                'price' => 900,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Коробка "Мишка"',
                'code' => 'bear',
                'category_id' => 2,
                'image' => 'products/bear.webp',
                'description' => 'Букет из клубники в шоколаде в коробке "Мишка"',
                'price' => 550,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор макарун "Арахис"',
                'code' => 'macarons_peanut',
                'category_id' => 3,
                'image' => 'products/peanut.jpg',
                'description' => 'Набор макаронсов арахис в стильной упаковке, макаронсы со вкусом арахис на основе ганаша, приготовленного из белого и черного бельгийского шоколада с добавлением арахисовой пасты и арахиса',
                'price' => 180,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор макарун "Грейпфрут"',
                'code' => 'macarons_grapefruit',
                'category_id' => 3,
                'image' => 'products/grapefruit.jpg',
                'description' => 'Набор макаронсов грейпфрут в стильной упаковке, начинка на основе ганаша из белого шоколада и натурального пюре грейпфрутов, кули клубничное на основе пюре клубники 100% и пюре груш Вильямс 100%',
                'price' => 180,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор макарун "Банан-клубника"',
                'code' => 'macarons_banana_strawberry',
                'category_id' => 3,
                'image' => 'products/banana-strawberry.jpg',
                'description' => 'Стильный набор из 6 макаронсов, нежное французское миндальное печенье на основе бананового ганаша и клубничного кули',
                'price' => 180,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор "Султан ассорти"',
                'code' => 'rahatlukum_sultan',
                'category_id' => 4,
                'image' => 'products/sultan.webp',
                'description' => 'Рахат-Лукум Асорти Султан 1,5 кг',
                'price' => 145,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор "Ореховое ассорти"',
                'code' => 'rahatlukum_nuts',
                'category_id' => 4,
                'image' => 'products/nuts.webp',
                'description' => 'Рахат-Лукум Асорти Ореховый 1,5 кг',
                'price' => 116,
                'count' => rand(0, 10),
            ],
        ]);
    }
}
