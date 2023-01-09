<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['likes', 'views', 'article_id'];
    public $timestamps = false;

    //Отношения здесь не указываем так как нам не надо брать статью из статистики
}
