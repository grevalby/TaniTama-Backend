<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Daun padi saya kering, apakah ada yang tahu kenapa?',
            'content' => 'Satu minggu yang lalu daun padi saya tiba-tiba mengering. Apakah ini disebabkan oleh kekurangan air, serangan hama atau penyakit, atau faktor lingkungan lainnya? Apakah ada yang pernah mengalami juga?',
            'image_url' => 'https://storage.googleapis.com/tanitama_bucket/image/f41f8d59f7a28b78f889.jpg',
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Bulir padi saya hampa, kira kira kenapa ya?',
            'content' => 'Lebih dari setengah hektar bulir padi saya hampa, ada yang tau kenapa? apakah kekurangan pupuk atau bagaimana ya?',
            'image_url' => 'https://storage.googleapis.com/tanitama_bucket/image/KKzNc6ZV8vHck0fOP7sb.jpg',
            'user_id' => 2
        ]);
    }
}
