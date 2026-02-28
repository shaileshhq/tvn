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
        Schema::create('tc_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('nationality')->nullable();
            $table->string('caste')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('result')->nullable();
            $table->string('subject')->nullable();
            $table->string('last_class_studied')->nullable();
            $table->string('school_result')->nullable();
            $table->string('qualified')->nullable();
            $table->string('full_ammount')->nullable();
            $table->string('receipt')->nullable();
            $table->string('ncc')->nullable();
            $table->string('date_name_struck')->nullable();
            $table->string('reasion')->nullable();
            $table->string('full_count')->nullable();
            $table->string('full_present')->nullable();
            $table->string('gen_conduct')->nullable();
            $table->string('remark')->nullable();
            $table->string('issue_date')->nullable();
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
        Schema::dropIfExists('tc_forms');
    }
};
