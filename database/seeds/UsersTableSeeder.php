<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'role_id'=> 2,
            'is_active'=>1,
            'email' => str_random(10). '@gmail.com',
            'password' => bcrypt('secret'),
            'created_at' => rememberToken(),
            'updated_at' => timestamps(),
            // 'photo_id' => random_int()
        ]);
    }
}
