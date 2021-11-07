<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_article', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('user_id');
            $table->string('article_id');
            $table->string('title')->comment('タイトル');
            $table->text('content')->comment('内容');
            $table->integer('status')->comment('公開状態');

            $table->timestamps();

            $table->unique(['user_id', 'article_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_article');
    }
}
