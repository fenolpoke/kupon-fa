<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Coupon;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UserTableSeeder');
    	Coupon::create(['name'=>'a'])
    }
}
