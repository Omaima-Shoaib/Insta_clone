<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    
        //sending emails is using Laravel queues (try 2 : another way)
//         public function sendMails(){

//             $emails = User::Chunk(5,function($data){
//                 dispatch(new SendMails($data));
//             });
//             return 'will send in back ground can do any other things';
//         }
    
}
