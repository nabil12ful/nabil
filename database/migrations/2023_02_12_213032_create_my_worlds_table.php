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
        Schema::create('my_worlds', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('title1');
            $table->string('title2');
            $table->string('title3');
            $table->string('desc');
            $table->string('desc1');
            $table->string('desc2');
            $table->string('desc3');
            $table->string('icon1');
            $table->string('icon2');
            $table->string('icon3');
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
        Schema::dropIfExists('my_worlds');
    }
};
