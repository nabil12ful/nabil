<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('who_works', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('desc');
            $table->string('image');
            $table->string('icon1');
            $table->string('title1');
            $table->text('desc1');
            $table->string('icon2');
            $table->string('title2');
            $table->text('desc2');
            $table->string('icon3');
            $table->string('title3');
            $table->text('desc3');
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
        Schema::dropIfExists('who_works');
    }
};
