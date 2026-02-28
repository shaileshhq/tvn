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
        Schema::create('assign_fees', function (Blueprint $table) {
            $table->id();
            $table->string('academic_year_id')->nullable();
            $table->string('class_id')->nullable();
            $table->string('fee_id')->nullable();
            $table->string('ammount')->nullable();
            $table->string('month')->nullable();
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
        Schema::dropIfExists('assign_fees');
    }
};
