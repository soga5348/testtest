<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todos', function (Blueprint $table) {
            $table->id();
            $table->string('content', 255);
            $table->timestamps();
            $table->string('title', 255);
            $table->unsignedBigInteger('user_id'); // ユーザーを示す外部キー
            $table->foreign('user_id')->references('id')->on('users'); // users テーブルの id カラムを参照
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('todos');
    }
}
