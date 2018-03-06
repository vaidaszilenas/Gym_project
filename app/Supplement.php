<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplement extends Model
{
  protected $fillable = ['title', 'price', 'file_name'];
 protected $table = 'supplement';

 public function getUrlAttribute()
{
  // return str_replace('public', 'storage', $this->file_name);
  $photoUrl = explode('/', $this->file_name);
  $photoUrl[0] = 'storage';
  $photoUrl = implode('/', $photoUrl);
  return $photoUrl;
}
}
