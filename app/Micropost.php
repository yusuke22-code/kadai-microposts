<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content','user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorite_users()
    {
        return $this->belongsToMany(User::class,'favorites','micropost_id','user_id')->withTimestamps();
    }
    
 //   public function unfavorite($micropostId)
 //   {
 //       $exist = $this->is_favorites($micropostId);
 //       $its_me = $this->id ==$userId;
        
   //     if($exist){
//        if($exist && !$its_me){
     //       $this->favorites()->detach($micropostId);
    //        return true;
//        }
  //      else{
//            return false;
  //      }
//    }
    
//    public function is_favorites($userId)
//    {
//        return $this->favorite_users()->where('user_id',$userId)->exists();
 //   }
}
