<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
  protected $fillable = ['name', 'surname', 'email', 'phone', 'description', 'file_name'];
  protected $table = 'coach';

 public function getUrlAttribute()
{
  // return str_replace('public', 'storage', $this->file_name);
  $photoUrl = explode('/', $this->file_name);
  $photoUrl[0] = 'storage';
  $photoUrl = implode('/', $photoUrl);
  return $photoUrl;
}
}
