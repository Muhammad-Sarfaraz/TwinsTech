<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            
            'name' => 'Root',
            'email' => 'root@twinstech.com',
            'password' => bcrypt('rootadmin'),
        ]);

        DB::table('users')->insert([
            
            'name' => 'Admin',
            'email' => 'admin@twinstech.com',
            'password' => bcrypt('admin123'),
        ]);
    }
}
