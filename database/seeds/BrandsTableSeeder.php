<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('brands')->insert([
    		[
                'name' => 'apple',
                'image' => 'img/brands/apple.png',
            ],
            [
                'name' => 'artel',
                'image' => 'img/brands/artel.png',
            ],
            [
                'name' => 'bosch',
                'image' => 'img/brands/bosch.png',
            ],
            [
                'name' => 'gigabyte',
                'image' => 'img/brands/gigabyte.png',
            ],
            [
                'name' => 'goodwell',
                'image' => 'img/brands/goodwell.png',
            ],
            [
                'name' => 'gree',
                'image' => 'img/brands/gree.png',
            ],
            [
                'name' => 'indesit',
                'image' => 'img/brands/indesit.png',
            ],
            [
                'name' => 'lg',
                'image' => 'img/brands/lg.png',
            ],
            [
                'name' => 'msi',
                'image' => 'img/brands/msi.png',
            ],
            [
                'name' => 'razor',
                'image' => 'img/brands/razer.png',
            ],
            [
                'name' => 'samsung',
                'image' => 'img/brands/samsung.png',
            ],
            [
                'name' => 'xiaomi',
                'image' => 'img/brands/xiaomi.png',
            ],
        ]);
    }
}