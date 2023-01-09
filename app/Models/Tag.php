<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['label'];
    public $timestamps = false;//здесь отключаем автоматические метки времени (это поля 'created_at' и 'updated_at' в таблицах БД, которые создаются по умолчанию)


    //многие ко многим
    public function articles(){
        return $this->belongsToMany(Article::class);
    }
}
