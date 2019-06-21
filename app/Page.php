<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{

    //protected $fillable = ['id'];
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


}
