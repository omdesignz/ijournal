<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longText('abstract')->nullable();
            $table->longText('references')->nullable();
            $table->string('keywords')->nullable();
            $table->string('cite_instructions')->nullable();
            $table->string('authors')->nullable();
            $table->string('link')->nullable();
            $table->date('published_at')->nullable();
            $table->boolean('status')->default(false);
            $table->boolean('agree_terms')->default(false);
            $table->boolean('agree_privacy_policy')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('journal_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('journal_id')->references('id')->on('journals');
            $table->softDeletes('deleted_at', 0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
}
