<?php
function isFollowing($id){
    if(\App\Models\followship::where('user1_id',$id)->where('user2_id',auth()->user()->id)->exists())
    {
        return"follower";
    }
    elseif(\App\Models\followship::where('user2_id',$id)->where('user1_id',auth()->user()->id)->exists())
    
    {
        return "following";
    }
    else
    {
        return "none";
    }
}