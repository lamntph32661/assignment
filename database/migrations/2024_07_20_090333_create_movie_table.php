<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->nullable(false);
            $table->text('description');
            $table->integer('duration')->unsigned();
            $table->date('release_date');
            $table->unsignedInteger('genre_id');
            $table->timestamps();
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movie');
    }
};
