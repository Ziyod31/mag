<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		[
    			'name' => 'Admin',
    			'is_admin' => '1',
    			'avatar' => 'img/admin.png',
    			'phone' => '998990229205',
    			'email' => 'ziyod_31@mail.ru',
    			'password' => bcrypt('p@ssw0rd'),
    			'email_verified_at' => now(),
    			'city_id' => NULL,
    			'region_id' => NULL,
    			'address' => NULL,
    		],
    		[
    			'name' => 'Ziyod',
    			'is_admin' => '0',
    			'avatar' => 'img/default.jpg',
    			'phone' => '998990099009',
    			'email' => 'ziyodkhusanov@gmail.com',
    			'password' => bcrypt('310592'),
    			'email_verified_at' => now(),
    			'city_id' => '1',
    			'region_id' => '1',
    			'address' => 'district_18',
    		],
    	]);
    }
}
