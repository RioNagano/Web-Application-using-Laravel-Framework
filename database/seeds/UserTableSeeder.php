<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       DB::table('users')->insert([
            [      
                'username' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'role' => 'admin'],
            
            [
                'username' => 'rio',
                'email' => 'rio@nagano.com',
                'password' => Hash::make('nagano'),
                'role' => 'member']
       ]);
    }
}
