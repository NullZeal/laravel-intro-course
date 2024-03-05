<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user1 = User::factory()->create();

        $category1 = Category::create([
            'name'=> 'Family',
            'slug'=> 'family'
        ]);

        $category2 = Category::create([
            'name'=> 'Personal',
            'slug'=> 'personal'
        ]);

        $category3 = Category::create([
            'name'=> 'Work',
            'slug'=> 'work'
        ]);

        $post1 = Post::create([
            'user_id'=> $user1->id,
            'category_id'=> $category1->id,
            'title'=> 'My dear sister',
            'slug' => 'my-first-post',
            'excerpt'=> '<p>Lorem ipsum dolar sit amet.<p>',
            'body'=> 'Lorem ipsum blablabla sit amet consectereur adipscing elit.',
        ]);

        $post2 = Post::create([
            'user_id'=> $user1->id,
            'category_id'=> $category2->id,
            'title'=> 'My self love for rocks',
            'slug' => 'my-second-post',
            'excerpt'=> '<p>Lorem ipsum dolar sit amet.<p>',
            'body'=> 'Lorem ipsum blablabla sit amet consectereur adipscing elit.',
        ]); 

        $post3 = Post::create([
            'user_id'=> $user1->id,
            'category_id'=> $category3->id,
            'title'=> 'My laravel app',
            'slug' => 'my-third-post',
            'excerpt'=> '<p>Lorem ipsum dolar sit amet.<p>',
            'body'=> 'Lorem ipsum blablabla sit amet consectereur adipscing elit.',
        ]);
    }
}
