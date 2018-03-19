<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
  protected $fillable = ['workout', 'description', 'file_name', 'time', 'day', 'users_id'];
 protected $table = 'workout';

 public function getUrlAttribute()
{
  // return str_replace('public', 'storage', $this->file_name);
  $photoUrl = explode('/', $this->file_name);
  $photoUrl[0] = 'storage';
  $photoUrl = implode('/', $photoUrl);
  return $photoUrl;
}
public function user(){
    return $this->belongsTo('App\User', 'users_id');
}
}
