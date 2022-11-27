<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;
class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();

        DB::table('admins')->insert([
            'name'   =>  'Michael Himeng',
            'sender_id'   =>  'CPMR',
            'country'   =>  '3456',
            'tell'   =>  '024567890',
            'email'   =>  'hemenmike@gmail.com',
            'username'   =>  'hemenmike',
            'password' => Hash::make('mike123456'),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
