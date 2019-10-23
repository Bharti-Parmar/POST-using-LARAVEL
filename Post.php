<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $table = 'posts';
    Protected $fillable = ['title','body'];
}
