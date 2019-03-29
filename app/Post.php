<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $dates = ['published_at'];

    public function category(){ //Con esto cuando accedamos a la categoría podamos acceder a cada tabla de la misma
        return $this->belongsTo(Category::class);
    }
}
