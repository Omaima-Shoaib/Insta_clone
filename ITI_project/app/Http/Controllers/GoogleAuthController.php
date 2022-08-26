<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\RegisteredUserNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect(){
        return Socialite::driver('google')->redirect(); 
    }

    public function callbackGoogle(){
        try{

            $google_user = Socialite::driver('google')->user();

            $user = User::where('google_id', $google_user->getId())->first();

            if(!$user){
                $new_user = User::create([
                  'name' => $google_user->getName(),
                  'username' => $google_user->getNickname(),
                  'email' => $google_user->getEmail(),
                  'google_id' => $google_user->getId(),
                

                ]);

                Auth::login($new_user);


                //  $users=User::where('id',1)->get();
                //  //$users=User::where('name',$user->name)->get();
                //  Notification::send($users, new RegisteredUserNotification($users));


                return redirect()->intended('dashboard');
            }
            else{

                Auth::login($user);

                return redirect()->intended('dashboard');
            }

        } catch (\Throwable $th){
            dd('Something went wrong! '. $th->getMessage());
        }
    }
}
