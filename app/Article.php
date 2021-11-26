<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function getUser(){
        return $this->belongsTo(User::class,"user_id");
    }

    public function getCategory(){
        return $this->belongsTo(Category::class,"category_id");
    }
}
