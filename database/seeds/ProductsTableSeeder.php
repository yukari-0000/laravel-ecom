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
        'title' => 'Product 1',
        'image' => secure_asset('storage/cat1.jpeg'),
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit unde quam non distinctio quasi. Autem nulla eveniet dolores pariatur possimus nisi accusamus, aspernatur vero sint nesciunt, ipsam odit repudiandae repellendus!',
        'price' => '1000'
        ]);
        \App\Product::create([
        'title' => 'Product 2',
        'image' => secure_asset('storage/cat2.jpeg'),
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit unde quam non distinctio quasi. Autem nulla eveniet dolores pariatur possimus nisi accusamus, aspernatur vero sint nesciunt, ipsam odit repudiandae repellendus!',
        'price' => '1000'
        ]);
       \App\Product::create([
        'title' => 'Product 3',
        'image' => secure_asset('storage/picture.jpeg'),
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit unde quam non distinctio quasi. Autem nulla eveniet dolores pariatur possimus nisi accusamus, aspernatur vero sint nesciunt, ipsam odit repudiandae repellendus!',
        'price' => '1000'
        ]);
        }
    }
