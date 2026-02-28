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
        Schema::create('fee_deposits', function (Blueprint $table) {
            $table->id();
            $table->string('admission_no')->nullable();
            $table->string('academic_id')->nullable();
            $table->string('class_id')->nullable();
            $table->string('paid')->nullable();
            $table->string('to_pay')->nullable();
            $table->string('due')->nullable();
            $table->string('dated')->nullable();
            $table->string('collector')->nullable();
            $table->string('month')->nullable();
            $table->string('fee_concession')->nullable();
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
        Schema::dropIfExists('fee_deposits');
    }
};
