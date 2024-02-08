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
        Schema::table('products', function (Blueprint $table) {
            $table->string('second')->nullable();
            $table->string('grade')->nullable();
            $table->string('size')->nullable();
            $table->string('pack')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('second')->nullable();
            $table->dropColumn('grade');
            $table->dropColumn('size');
            $table->dropColumn('pack');

        });

    }
};
