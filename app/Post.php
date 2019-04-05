<?php

namespace App;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];
    protected $dates = ['published_at'];

    //Función para tener las url por nombre y no por id
    public function getrouteKeyName(){
        return 'url';
    }

    public function category(){ //Con esto cuando accedamos a la categoría podamos acceder a cada tabla de la misma
        return $this->belongsTo(Category::class);
    }

    public function scopePublished($query){
        $query->whereNotNull('published_at')
        ->where('published_at', '<=', Carbon::now())
        ->latest('published_at');
    }
}
