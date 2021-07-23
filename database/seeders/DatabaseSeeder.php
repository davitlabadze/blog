<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Admin::truncate();
        Category::truncate();
        Post::truncate();

        Admin::create([
            'username'=> 'admin',
            'password'=> 'admin',
        ]);

        Category::create([
           'title'=> 'Cars',
            'detail'=> 'Cars',
           'image' => 'car.jpg',
        ]);

        Category::create([
            'title'=> 'Mobile phones',
             'detail'=> 'Mobile phones',
            'image' => 'mb.jpg',
         ]);

         Category::create([
            'title'=> 'Laptops',
             'detail'=> 'Laptops',
            'image' => 'laptops.png',
         ]);

        Post::create([
            'cat_id'=> '1',
            'title'=> 'Tesla cameras will monitor driver awareness',
            'thumb'=> 'tesla.jpg',
            'full_img'=>'tesla.jpg',
            'detail'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse similique
                        veritatis voluptatem ratione maxime modi harum nisi dolorum odit doloribus voluptas obcaecati,
                        error exercitationem iusto neque asperiores sapiente cum vitae.',
            'tags'=> 'test'
        ]);

        Post::create([
            'cat_id'=> '2',
            'title'=> 'Best Sony phones 2021: find the right Sony Xperia smartphone for you',
            'thumb'=> 'sony.jpg',
            'full_img'=>'sony.jpg',
            'detail'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse similique
                        veritatis voluptatem ratione maxime modi harum nisi dolorum odit doloribus voluptas obcaecati,
                        error exercitationem iusto neque asperiores sapiente cum vitae.',
            'tags'=> 'test'
        ]);

        Post::create([
            'cat_id'=> '3',
            'title'=> 'Should You Buy the 13-Inch MacBook Pro?',
            'thumb'=> 'book.jpg',
            'full_img'=>'book.jpg',
            'detail'=> 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse similique
                        veritatis voluptatem ratione maxime modi harum nisi dolorum odit doloribus voluptas obcaecati,
                        error exercitationem iusto neque asperiores sapiente cum vitae.',
            'tags'=> 'test'
        ]);


        
    }
}

