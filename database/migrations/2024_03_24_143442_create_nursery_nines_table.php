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
        Schema::create('nursery_nines', function (Blueprint $table) {
            $table->id();
            $table->string('admission')->nullable();
            $table->string('session')->nullable();
            $table->string('name')->nullable();
            $table->string('blood')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('caste')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('father_offic_address')->nullable();
            $table->string('mother_office_address')->nullable();
            $table->string('local_address')->nullable();
            $table->string('father_full_ads')->nullable();
            $table->string('mother_full_ads')->nullable();
            $table->string('father_income')->nullable();
            $table->string('mother_income')->nullable();
            $table->string('last_school')->nullable();
            $table->string('cbsc_affilated')->nullable();
            $table->string('not_affilated')->nullable();
            $table->string('result')->nullable();
            $table->string('percentage')->nullable();
            $table->string('subject')->nullable();
            $table->string('tc_date')->nullable();
            $table->string('mother_tongue')->nullable();
            $table->string('home_town')->nullable();
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
        Schema::dropIfExists('nursery_nines');
    }
};
