<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            //$table->timestamps();//Убираем метки времени, так как в модели app/Models/Tag.php мы написали:
            //public $timestamps = false;//здесь отключаем автоматические метки времени (это поля 'created_at' и 'updated_at' в таблицах БД, которые создаются по умолчанию)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
