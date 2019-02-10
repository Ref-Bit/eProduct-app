<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
        $product1 = [
            'name' => 'Learn how to build a control system for Mobile Robots',
            'image' => 'uploads/products/book.png',
            'price' => 5000,
            'description' => 'In est dolor, blandit posuere libero aliquam, lacinia feugiat nisl. Proin bibendum lectus quam, ac tristique lorem commodo in. Vivamus in felis eget quam sollicitudin consectetur. Vivamus at purus eu neque dignissim dictum nec vitae enim. Suspendisse potenti. Pellentesque lobortis, nisi id interdum consequat, leo magna eleifend nulla, at dictum justo ipsum ac ipsum. Morbi sodales quam ut molestie convallis.',
        ];
        \App\Product::create($product1);

        $product2 = [
            'name' => '3D Printing for Dummies',
            'image' => 'uploads/products/book3.png',
            'price' => 2400,
            'description' => 'Integer ac suscipit felis. Pellentesque ultricies orci consequat arcu vehicula euismod. Aenean hendrerit nec eros in ultricies. Nullam aliquam elit nec commodo feugiat. Nunc id ligula consectetur massa hendrerit imperdiet nec at risus. Sed non turpis auctor justo auctor scelerisque eu vitae augue. Donec posuere sollicitudin dui, at lacinia lorem semper ut. Vestibulum mattis non sem at molestie. Nam pretium neque aliquet, aliquam odio eget, dapibus tellus.',
        ];
        \App\Product::create($product2);
         */

        factory(\App\Product::class, 30)->create();
    }


}
