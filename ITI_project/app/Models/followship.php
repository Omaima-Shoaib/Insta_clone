<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class followship extends Model
{
    use HasFactory;
    public function user1(){
        return $this->belongsTo(User::class,'user1_id','id');
    }

    public function user2(){
        return $this->belongsTo(User::class,'user2_id','id');
    }
}
