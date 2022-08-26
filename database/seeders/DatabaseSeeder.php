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
            'id'=>'1',
             'name' => 'yomna sherif',
             'email' => 'yomna222yomna@gmail.com',
             'username'=> 'yomna',
             'phone'=> '01234567891',
             'password'=> Hash::make(value:12345678),
             'image'=>'avatar1.png',

            

         ]);

         $user2=\App\Models\User::create([
            'id'=>'2',
             'name' => 'lara Ali',
             'email' => 'lara222laraaaa@gmail.com',
             'username'=> 'lara',
             'phone'=> '01234567895',
             'password'=>  Hash::make(value:11112222),
             'image'=>'avatar2.png',

         ]);
         
         $user3=\App\Models\User::create([
            'id'=>'3',
            'name' => 'Omaima Shoaib Ahmed ',
            'email' => 'omaimashoaib@gmail.com',
            'username'=> 'Omaima-Shoaib',
            'phone'=> '01064079849',
            'password'=>  Hash::make(value:90909090),
            'image'=>'avatar2.png',

        ]);
         $post1=\App\Models\Post::create([
           'id'=>'1',
           'caption'=>"omaima's post",
           'user_id'=>'1',

        ]);
         $post2=\App\Models\Post::create([
           'id'=>'2',
           'caption'=>"lara's post",
           'user_id'=>'2',

        ]);
         $post3=\App\Models\Post::create([
           'id'=>'3',
           'caption'=>"yomna's post",
           'user_id'=>'3',
        ]);
         $image=\App\Models\Image::create([
           'id'=>'1',
           'image'=>"posts/1UtRsphFPerjnBPFoDICpaOq2wJxcOotDUExI2nO.jpg",
           'post_id'=>'1',
        ]);
         $image2=\App\Models\Image::create([
           'id'=>'2',
           'image'=>"posts/1UtRsphFPerjnBPFoDICpaOq2wJxcOotDUExI2nO.jpg",
           'post_id'=>'2',
        ]);
         $image2=\App\Models\Image::create([
           'id'=>'3',
           'image'=>"posts/EMiTdF25muSautWWzsEoSilaAzIuxl5F9V5mijgl.jpg",
           'post_id'=>'3',
        ]);
         $image3=\App\Models\Image::create([
           'id'=>'4',
           'image'=>"posts/1UtRsphFPerjnBPFoDICpaOq2wJxcOotDUExI2nO.jpg",
           'post_id'=>'3',
        ]);
         $isavedpost=\App\Models\SavedPost::create([
           'id'=>'1',
           'post_id'=>'3',
           'user_id'=>'1'
        ]);
         $savedpost2=\App\Models\SavedPost::create([
           'id'=>'2',
           'post_id'=>'1',
           'user_id'=>'2'
        ]);
         $savedpost3=\App\Models\SavedPost::create([
           'id'=>'3',
           'post_id'=>'2',
           'user_id'=>'2'
        ]);
         $savedpost4=\App\Models\SavedPost::create([
           'id'=>'4',
           'post_id'=>'3',
           'user_id'=>'2'
        ]);
        
         $savedpost4=\App\Models\Like::create([
           'id'=>'1',
           'post_id'=>'3',
           'user_id'=>'1'
        ]);
        
         $savedpost4=\App\Models\Like::create([
           'id'=>'2',
           'post_id'=>'3',
           'user_id'=>'2'
        ]);
        
        
         $comment1=\App\Models\Comment::create([
           'id'=>'1',
           'post_id'=>'3',
           'author'=>'lara Ali',
           'text'=>'perfect',
        ]);
         $comment2=\App\Models\Comment::create([
           'id'=>'2',
           'post_id'=>'2',
           'author'=>'Omaima Shoaib Ahmed',
           'text'=>'This is lovely',
        ]);
        
         $comment3=\App\Models\Comment::create([
           'id'=>'3',
           'post_id'=>'1',
           'author'=>'Omaima Shoaib Ahmed',
           'text'=>'This is lovely',
        ]);
        
         $comment4=\App\Models\Comment::create([
           'id'=>'4',
           'post_id'=>'1',
           'author'=>'lara Ali',
           'text'=>'-_- -_- -_-',
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
