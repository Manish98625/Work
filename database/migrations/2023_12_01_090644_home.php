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
           Schema::create('home', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email',250)->nullable();
            $table->date('date')->nullable();
            $table->string('national',65)->nullable();
            $table->string('phonenumber',10);
            $table->string('address',15);
            $table->string('image',500)->nullable();
            $table->string('gender')->nullable();
            $table->string('skill');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
          Schema::dropIfExists('home');
    }
};
