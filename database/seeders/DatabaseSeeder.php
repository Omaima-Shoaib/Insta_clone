<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
        
        $user1=\App\Models\User::create([
             'name' => 'yomna sherif',
             'email' => 'yomna222yomna@gmail.com',
             'username'=> 'yomna',
             'phone'=> '01234567891',
             'password'=> Hash::make(value:12345678),
             'image'=>'avatar1.png',

            

         ]);

         $user2=\App\Models\User::create([
             'name' => 'lara Ali',
             'email' => 'lara222laraaaa@gmail.com',
             'username'=> 'lara',
             'phone'=> '01234567895',
             'password'=>  Hash::make(value:11112222),
             'image'=>'avatar2.png',

         ]);
        
        
//         //following
//          \App\Models\followship::create([
//              'user1_id'=>$user2->id,//i am the logged in so user2 is following me
//              'user2_id'=>1,
//          ]);
//            //followers
//          \App\Models\followship::create([
//             'user1_id'=>1,//i am the logged in so user3 is following me
//              'user2_id'=>$user2->id,//this user2_id is in the followers of u1 
//          ]);

        
        
        
  
        
        
    }
}
