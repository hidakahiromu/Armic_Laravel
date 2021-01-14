<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('post')) {
            Schema::create('post', function (Blueprint $table) {
                $table->string('userID');
                $table->string('artistName');
                $table->string('artistFrigana');
                $table->string('title');
                $table->string('URL');//youtubeのリンク
                $table->string('profile');//作品の説明文
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
