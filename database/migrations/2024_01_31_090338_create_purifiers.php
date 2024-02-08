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
        Schema::create('purifiers', function (Blueprint $table) {
             $table->increments('id');
            $table->string('name')->nullable();
            $table->string('image', 500)->nullable();
            $table->string('grade')->nullable();
            $table->string('size')->nullable();
            $table->string('packing')->nullable();
            $table->longText('discription')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purifiers');
    }
};
