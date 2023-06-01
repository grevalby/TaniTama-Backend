<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detection;

class DetectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detection::create([
            'user_id' => 1,
            'image_url' => 'https://i2.wp.com/gdmorganic.com/wp-content/uploads/2021/05/penyakit-hawar-daun.jpg',
            'disease_id' => 1,
            'time_predict' => '0.2',
            'accuracy' => 90.99
        ]);

        Detection::create([
            'user_id' => 1,
            'image_url' => 'https://i2.wp.com/gdmorganic.com/wp-content/uploads/2021/05/penyakit-hawar-daun.jpg',
            'disease_id' => 1,
            'time_predict' => '0.2',
            'accuracy' => 98.99
        ]);

        Detection::create([
            'user_id' => 1,
            'image_url' => 'https://i2.wp.com/gdmorganic.com/wp-content/uploads/2021/05/penyakit-hawar-daun.jpg',
            'disease_id' => 1,
            'time_predict' => '0.2',
            'accuracy' => 95.99
        ]);
    }
}
