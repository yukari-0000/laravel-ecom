<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
        'name' => 'Product 1',
        'image' => '1583128731pexels-photo-cat.jpeg',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit unde quam non distinctio quasi. Autem nulla eveniet dolores pariatur possimus nisi accusamus, aspernatur vero sint nesciunt, ipsam odit repudiandae repellendus!',
        'price' => '1000'
        ]);
        \App\Product::create([
        'name' => 'Product 2',
        'image' => '1583208818pexels-photo-cat2.jpeg',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit unde quam non distinctio quasi. Autem nulla eveniet dolores pariatur possimus nisi accusamus, aspernatur vero sint nesciunt, ipsam odit repudiandae repellendus!',
        'price' => '1000'
        ]);
       \App\Product::create([
        'name' => 'Product 3',
        'image' => '1583208971pexels-photo-3646213.jpeg',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit unde quam non distinctio quasi. Autem nulla eveniet dolores pariatur possimus nisi accusamus, aspernatur vero sint nesciunt, ipsam odit repudiandae repellendus!',
        'price' => '1000'
        ]);
        }
    }
