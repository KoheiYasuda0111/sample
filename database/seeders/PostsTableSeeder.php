<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Comment;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::truncate();
        Comment::truncate();
        Post::factory()
            ->times(50)
            ->create()
            ->each(function ($post) {
                Comment::factory()
                    ->times(2)
                    ->create([
                        'post_id' => $post->id
                    ]);
            });
    }
}
