<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::create([
            'post_id' => 1,
            'user_id' => 2,
            'content' => 'Sepertinya karena kekurangan air, saya juga pernah mengalaminya dua tahun lalu',
        ]);
    }
}
