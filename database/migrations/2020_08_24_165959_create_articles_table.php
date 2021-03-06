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
            $table->string('post_judul', 500);
            $table->longText('post_isi');
            $table->string('post_slug');
            // $table->unsignedBigInteger('kategori_id');
            // $table->foreign('kategori_id')->references('id')->on('kategoris');
            $table->unsignedBigInteger('login_id');
            $table->foreign('login_id')->references('id')->on('logins');
            $table->string('gambar')->nullable();
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
