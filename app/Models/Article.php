<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug'];

    //один ко многим
    public function comments(){
        return $this->hasMany(Comment::class);
    }

    //один к одному
    public function state(){
        return $this->hasOne(State::class);
    }

    //многие ко многим
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
