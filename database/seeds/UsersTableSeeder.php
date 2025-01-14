<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
                'role_id' => '0', // admin

                'name'=> 'Admin',
                'dateofbirth' => '2019-10-12',
                'email' => 'steakfood@gmail.com',
                'password' => bcrypt('12341234'),
                'phone' => '1234123412',
                'address' => 'VietNam',
                'email_verified_at' => Carbon::now(),

                'created_at' => Carbon::now(),

            ],
            [
                'role_id' => '1', // admin

                'name'=> 'User',
                'dateofbirth' => '2019-10-12',
                'email' => 'user@gmail.com',
                'password' => bcrypt('12341234'),
                'phone' => '1234123413',
                'address' => 'VietNam',
                'email_verified_at' => Carbon::now(),

                'created_at' => Carbon::now(),

            ],

        ]);
    }
}
