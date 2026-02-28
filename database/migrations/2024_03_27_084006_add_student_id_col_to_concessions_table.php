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
        Schema::table('concessions', function (Blueprint $table) {
            $table->string('student_admission_id')->after('admission_no')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('concessions', function (Blueprint $table) {
            $table->dropColumn('student_admission_id');
        });
    }
};
