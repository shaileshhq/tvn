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
        Schema::table('admissionelevens', function (Blueprint $table) {
            $table->string('g_name')->after('mother_name')->nullable();
            $table->string('intro_name')->after('g_name')->nullable();
            $table->string('g_occupation')->after('mother_occupation')->nullable();
            $table->string('intro_occupation')->after('g_occupation')->nullable();
            $table->string('g_address')->after('mother_office_address')->nullable();
            $table->string('intro_address')->after('g_address')->nullable();
            $table->string('g_permanent_address')->after('mother_permanent_address')->nullable();
            $table->string('intro_permanent_address')->after('g_permanent_address')->nullable();
            $table->string('g_number')->after('mother_number')->nullable();
            $table->string('intro_number')->after('g_number')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('admissionelevens', function (Blueprint $table) {
           $table->dropColumn('g_name','intro_name','g_occupation','intro_occupation','g_address','intro_address','g_permanent_address','intro_permanent_address','g_number','_intro_number');
        });
    }
};
