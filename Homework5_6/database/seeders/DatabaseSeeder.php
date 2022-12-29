<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title' => 'First Post',
                'body' => 'This is the body of the first post.',
            ],
            [
                'title' => 'Second Post',
                'body' => 'This is the body of the second post.',
            ],
            [
                'title' => 'Third Post',
                'body' => 'This is the body of the third post.',
            ],
        ];

        foreach ($posts as $postData) {
            $post = Post::create($postData);

            $comments = [
                [
                    'body' => 'This is a comment on this post.',
                ],
                [
                    'body' => 'This is another comment',
                ],
            ];

            foreach ($comments as $commentData) {
                $comment = new Comment($commentData);
                $comment->post_id = $post->id;
                $comment->save();
            }
        }
    }
    
}
