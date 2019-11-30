<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->mediumText('message');
            $table->boolean('accepted')->default('0');
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $tahle->string('description');
        });

        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('post_id');
            $table->boolean('accepted')->default('0');
        });
    }

    public function down()
    {
        Schema::dropIfExists('quotes');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('comments');
    }
}
