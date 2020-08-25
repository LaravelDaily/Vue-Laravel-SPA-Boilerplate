<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Item One',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!',
                'price' => 24.99,
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Two',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.',
                'price' => 24.99,
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Three',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!',
                'price' => 24.99,
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Four',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.',
                'price' => 24.99,
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Five',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!',
                'price' => 24.99,
                'photo' => 'http://placehold.it/700x400',

            ],
            [
                'name' => 'Item Six',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.',
                'price' => 24.99,
                'photo' => 'http://placehold.it/700x400',

            ],
        ];

        foreach ($products as $product) {
            \App\Product::create($product);
        }
    }
}
