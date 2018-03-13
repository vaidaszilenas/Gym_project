<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
  protected $fillable = ['workout', 'description', 'file_name', 'time', 'day'];
 protected $table = 'workout';

 public function getUrlAttribute()
{
  // return str_replace('public', 'storage', $this->file_name);
  $photoUrl = explode('/', $this->file_name);
  $photoUrl[0] = 'storage';
  $photoUrl = implode('/', $photoUrl);
  return $photoUrl;
}
}
