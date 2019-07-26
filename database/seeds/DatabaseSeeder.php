<?php

use App\Post;
use App\Profile;
use App\Tag;
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
        $this->call(AffiliationTableSeeder::class);
        $profile = factory(Profile::class, 5)->create();
        $post = factory(Post::class, 15)->create();
        $tag = factory(Tag::class, 3)->create();
    }
}
