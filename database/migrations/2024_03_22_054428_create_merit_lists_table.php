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
        Schema::create('merit_lists', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('course')->nullable();
            $table->string('rank')->nullable();
            $table->string('percentage')->nullable();
            $table->string('session')->nullable();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merit_lists');
    }
};
