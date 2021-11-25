<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Visi;

class VisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $visi = Visi::create([
            'title' => 'Visi Misi Pt. Kelapa Sawit',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam porro officiis itaque atque repellendus necessitatibus at possimus, quos odit soluta deserunt veniam. Numquam nesciunt at dolores, odio laboriosam voluptatem non.',
            'image' => 'image1.jpg'
        ]);
    }
}
