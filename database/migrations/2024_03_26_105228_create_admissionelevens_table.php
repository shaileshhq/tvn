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
        Schema::create('admissionelevens', function (Blueprint $table) {
            $table->id();
            $table->string('stream')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('date_of_admission')->nullable();
            $table->string('class')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('name')->nullable();
            $table->string('blood')->nullable();
            $table->string('caste')->nullable();
            $table->string('nationality')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('father_office_address')->nullable();
            $table->string('mother_office_address')->nullable();
            $table->string('father_permanent_address')->nullable();
            $table->string('mother_permanent_address')->nullable();
            $table->string('father_number')->nullable();
            $table->string('mother_number')->nullable();
            $table->string('last_school_attended')->nullable();
            $table->string('last_school_studing')->nullable();
            $table->string('result')->nullable();
            $table->string('percentage')->nullable();
            $table->string('instruction')->nullable();
            $table->string('tc_date')->nullable();
            $table->string('home_town')->nullable();
            $table->string('countersigned')->nullable();
            $table->string('certificate')->nullable();
            $table->string('signature')->nullable();
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
        Schema::dropIfExists('admissionelevens');
    }
};
