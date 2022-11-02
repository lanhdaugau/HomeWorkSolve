<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Login;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        
        DB::table('users')->insert(
            [
                'name'=>'admin',
                'activeToken'=>bcrypt('admin@gmail.com')
                
            ]
           
        ) ;

        DB::table('login')->insert(
            [
                'email'=>'admin@gmail.com',
                'password'=>bcrypt('admin'),
                'role'=>'0',
                'idUsers'=>'1',
                'isActive'=>1
            ]
           
        ) ;
     }
}
