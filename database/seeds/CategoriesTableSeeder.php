<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('categories')->insert([
    		[
    			'name' => 'Mobiles',
    			'image' => 'img/categories/smartphones.jpg',
    			'parent_id' => null,
    		],
    		[
    			'name' => 'Computers',
    			'image' => 'img/categories/pc.jpg',
    			'parent_id' => null,
    		],
    		[
    			'name' => 'Air Conditioners',
    			'image' => 'img/categories/conditioner.jpeg',
    			'parent_id' => null,
    		],
    		[
    			'name' => 'TVs',
    			'image' => 'img/categories/tv.jpg',
    			'parent_id' => null,
    		],
    		[
    			'name' => 'Appliances',
    			'image' => 'img/categories/appliances.jpg',
    			'parent_id' => null,
    		],
    		[
    			'name' => 'Vacuum Cleaners',
    			'image' => 'img/categories/cleaners.jpg',
    			'parent_id' => '5',

    		],
    		[
    			'name' => 'Washing Machines',
    			'image' => 'img/categories/washing.jpg',
    			'parent_id' => '5',

    		],
    		[
    			'name' => 'Gas Stoves',
    			'image' => 'img/categories/gas.jpg',
    			'parent_id' => '5',

    		],
    		[
    			'name' => 'Refrigerators',
    			'image' => 'img/categories/refregirator.jpg',
    			'parent_id' => '5',

    		],
    		[
    			'name' => 'Kitchen Appliances',
    			'image' => 'img/categories/kitchen.jpg',
    			'parent_id' => null,
    		],
    		[
    			'name' => 'Microwaves',
    			'image' => 'img/categories/microwave.jpg',
    			'parent_id' => '10',

    		],
    		[
    			'name' => 'Teapots',
    			'image' => 'img/categories/teapot.jpg',
    			'parent_id' => '10',
    		],
    	]);
    }
}
