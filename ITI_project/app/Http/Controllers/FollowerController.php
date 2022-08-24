<?php
namespace App\HTTP\Controllers;

use App\Http\Middleware\Authenticate;
use App\Models\followship;
use App\Models\User;
use Illuminate\Http\Request;
//use Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Auth;

use Image;

class FollowerController extends Controller{

    public function followers(){
      $followers=followship::where('user1_id','!=',auth()->user()->id)->get();
      $following=followship::where('user1_id',auth()->user()->id)->get();
      $user=User::get();
      return view('followersdetails.followers',compact("followers","following","user"));
    }
}