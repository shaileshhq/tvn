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
        Schema::table('student_admissions', function (Blueprint $table) {
            $table->string('class_id')->after('acdamic_id')->nullable();
            $table->string('transport')->after('class_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('student_admissions', function (Blueprint $table) {
            $table->dropColumn('class_id');
            $table->dropColumn('transport');
        });
    }
};
