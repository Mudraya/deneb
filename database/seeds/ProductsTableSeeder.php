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
                'name_en' => 'Box of fruits "Mini"',
                'code' => 'fruitbox_mini',
                'category_id' => 1,
                'image' => 'products/mini.jpg',
                'description' => 'Содержит ананас, беби/молодой кокос, маракую, гранадиллу, рамбутаны, тамаринд, кумкват, киви "Gold"',
                'description_en' => 'Contains pineapple, baby / young coconut, marakuya, granadilla, rambutans, tamarind, kumquat, kiwi "Gold"',
                'price' => 400,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Фруктовая коробочка Стандарт',
                'name_en' => 'Box of fruits "Standart"',
                'code' => 'fruitbox_standart',
                'category_id' => 1,
                'image' => 'products/standart.jpg',
                'description' => 'Содержит только экзотические фрукты. Тайское манго/королевское манго, гранадилла, маракуйя, мангостаны, кумкват, тамаринд',
                'description_en' => 'Contains only exotic fruits. Thai mango / royal mango, granadilla, passionfruit, mangosteen, kumquat, tamarind.',
                'price' => 750,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Фруктовая коробочка Экзотик',
                'name_en' => 'Box of fruits "Exotic"',
                'code' => 'fruitbox_exotic',
                'category_id' => 1,
                'image' => 'products/ekzotik.jpg',
                'description' => 'Содержит только экзотические фрукты. Ананас беби/молодой кокос, гранадилла, мангостаны, маракуйя, рамбутаны, кумкват, тамаринд.',
                'description_en' => 'Contains only exotic fruits. Pineapple baby / young coconut, granadilla, mangosteen, passionfruit, rambutans, kumquat, tamarind.',
                'price' => 650,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Коробка "Розовая мечта"',
                'name_en' => 'Box of chocolate "Pink dream"',
                'code' => 'pink_dream',
                'category_id' => 2,
                'image' => 'products/pink_dream.webp',
                'description' => 'Букет из клубники в шоколаде в коробке "Розовая мечта"',
                'description_en' => 'Bouquet of strawberries in chocolate in a box "Pink dream"',
                'price' => 800,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Коробка "Шампанское"',
                'name_en' => 'Box of chocolate "Сhampagne"',
                'code' => 'strawberry_champagne',
                'category_id' => 2,
                'image' => 'products/champagne.webp',
                'description' => 'Букет из клубники в шоколаде с шампанским',
                'description_en' => 'Bouquet of strawberries in chocolate with champagne',
                'price' => 900,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Коробка "Мишка"',
                'name_en' => 'Box of chocolate "Bear"',
                'code' => 'bear',
                'category_id' => 2,
                'image' => 'products/bear.webp',
                'description' => 'Букет из клубники в шоколаде в коробке "Мишка"',
                'description_en' => 'Bouquet of strawberries in chocolate in a box "Bear"',
                'price' => 550,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор макарун "Арахис"',
                'name_en' => 'Box with macaroons with peanut flavor',
                'code' => 'macarons_peanut',
                'category_id' => 3,
                'image' => 'products/peanut.jpg',
                'description' => 'Набор макаронсов арахис в стильной упаковке, макаронсы со вкусом арахис на основе ганаша, приготовленного из белого и черного бельгийского шоколада с добавлением арахисовой пасты и арахиса',
                'description_en' => 'A set of 6 macaroons, peanut-flavored macaron based on ganache made from white and black Belgian chocolate with peanut butter and peanuts',
                'price' => 180,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор макарун "Грейпфрут"',
                'name_en' => 'Box with macaroons with grapefruit flavor',
                'code' => 'macarons_grapefruit',
                'category_id' => 3,
                'image' => 'products/grapefruit.jpg',
                'description' => 'Набор макаронсов грейпфрут в стильной упаковке, начинка на основе ганаша из белого шоколада и натурального пюре грейпфрутов, кули клубничное на основе пюре клубники 100% и пюре груш Вильямс 100%',
                'description_en' => 'A set of 6 macaroons, filling based on white chocolate ganache and natural grapefruit puree, strawberry coolie based on strawberry puree 100% and Williams pear puree 100%',
                'price' => 180,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор макарун "Банан-клубника"',
                'name_en' => 'Box with macarons with banana and strawberry flavor',
                'code' => 'macarons_banana_strawberry',
                'category_id' => 3,
                'image' => 'products/banana-strawberry.jpg',
                'description' => 'Стильный набор из 6 макаронсов, нежное французское миндальное печенье на основе бананового ганаша и клубничного кули',
                'description_en' => 'A set of 6 macaroons, tender French macaron based on banana ganache and strawberry coolie',
                'price' => 180,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор "Султан ассорти"',
                'name_en' => 'Box with turkish delights "Sultan mix"',
                'code' => 'rahatlukum_sultan',
                'category_id' => 4,
                'image' => 'products/sultan.webp',
                'description' => 'Рахат-Лукум Асорти Султан 1,5 кг',
                'description_en' => 'Turkish delights - Sultan mix - 1,5 kg',
                'price' => 145,
                'count' => rand(0, 10),
            ],
            [
                'name' => 'Набор "Ореховое ассорти"',
                'name_en' => 'Box with turkish delights "Nut mix"',
                'code' => 'rahatlukum_nuts',
                'category_id' => 4,
                'image' => 'products/nuts.webp',
                'description' => 'Рахат-Лукум Асорти Ореховый 1,5 кг',
                'description_en' => 'Turkish delights - Nut mix - 1,5 kg',
                'price' => 116,
                'count' => rand(0, 10),
            ],
        ]);
    }
}
