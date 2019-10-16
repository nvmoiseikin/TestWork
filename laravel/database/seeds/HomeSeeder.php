<?php

use App\Models\HomeSlider;
use Illuminate\Database\Seeder;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HomeSlider::create([
            'photo' => '/site_img/main0.jpg',
            'title' => 'ТЕРРИТОРИЯ МАКСИМАЛЬНОГО КОМФОРТА',
            'cover_bg' => '',
            'background_position' => '50% 30%',
        ]);

        HomeSlider::create([
            'photo' => '/site_img/main1.jpeg',
            'title' => 'ТЕРРИТОРИЯ МАКСИМАЛЬНОГО КОМФОРТА',
            'cover_bg' => 'linear-gradient(to top, rgba(0,0,0,0.70), rgba(0,0,0,0.50))',
            'background_position' => '',
        ]);

        HomeSlider::create([
            'photo' => '/site_img/main2.JPG',
            'title' => 'ТЕРРИТОРИЯ МАКСИМАЛЬНОГО КОМФОРТА',
            'cover_bg' => 'linear-gradient(to top, rgba(0,0,0,0.70), rgba(0,0,0,0.50))',
            'background_position' => '',
        ]);

        HomeSlider::create([
            'photo' => '/site_img/main3.jpg',
            'title' => 'ТЕРРИТОРИЯ МАКСИМАЛЬНОГО КОМФОРТА',
            'cover_bg' => 'linear-gradient(to top, rgba(0,0,0,0.70), rgba(0,0,0,0.50))',
            'background_position' => '',
        ]);
    }
}