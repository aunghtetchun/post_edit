<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function photos()
    {
//        return $this->hasMany(Photo::class);
        return $this->hasMany("App\photo", 'post_id', 'id');
    }
}
