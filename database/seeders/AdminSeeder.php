<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'John mumo',
            'email'=>'jmn.mumo@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>1
            
        ]);
       User::create([
            'name'=>'John1 mumo',
            'email'=>'jmn1.mumo@gmail.com',
            'password'=>bcrypt('password'),
            'admin'=>0
            
        ]);
    }
}
