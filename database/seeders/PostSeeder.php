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
            'title' => 'Daun padi terlihat kering',
            'content' => 'Halo semuanya, saya mengalami masalah pada daun padi saya, seperti terlihat pada gambar',
            'image_url' => 'https://assets.corteva.com/is/image/Corteva/ar2-4feb20?$image_desktop$',
            'author_id' => 1
        ]);
    }
}
