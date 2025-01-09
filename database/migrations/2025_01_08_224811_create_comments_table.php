<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->text('comment'); // Treść komentarza
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Odwołanie do użytkownika
            $table->foreignId('beat_id')->constrained()->onDelete('cascade'); // Odwołanie do bitu
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
