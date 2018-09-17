<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
   protected $fillable = ['title', 'body'];
   protected $date = ['created_at', 'updated_at'];
}
