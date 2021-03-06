<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'category_id', 'user_id'];


    public function image(){
      return $this->hasOne(Image::class, 'post_id');
}
