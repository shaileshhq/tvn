<?php

use App\Models\Admin;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create roles table
        if (!Schema::hasTable('roles')) {
            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('name')->unique();
                $table->tinyInteger('status')->default(1);
                $table->timestamps();
                $table->softDeletes();
            });
        } else {
            // Ensure missing columns are added if table exists
            Schema::table('roles', function (Blueprint $table) {
                if (!Schema::hasColumn('roles', 'status')) {
                    $table->tinyInteger('status')->default(1)->after('name');
                }
                if (!Schema::hasColumn('roles', 'deleted_at')) {
                    $table->softDeletes();
                }
            });
        }

        // Create permissions table (page-wise)
        if (!Schema::hasTable('permissions')) {
            Schema::create('permissions', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('role_id');
                $table->string('page_slug');
                $table->timestamps();

                $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
                $table->unique(['role_id', 'page_slug']);
            });
        }

        // Add role_id to admins table
        if (!Schema::hasColumn('admins', 'role_id')) {
            Schema::table('admins', function (Blueprint $table) {
                $table->unsignedBigInteger('role_id')->nullable()->after('id');
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('set null');
            });
        }

        // Create default "Super Admin" role with all permissions
        $role = Role::firstOrCreate(['name' => 'Super Admin']);

        // Assign Super Admin role to the first admin
        Admin::where('id', 1)->update(['role_id' => $role->id]);

        // Give Super Admin all page permissions
        $pages = [
            'dashboard', 'web_setup', 'academic-year', 'class', 'student-register',
            'slider', 'document', 'pdf', 'school-time', 'transport-rules',
            'cbse-affiliate', 'teacher', 'committee', 'tc-form', 'tc-upload',
            'merit-list', 'student-admission', 'student-promotion', 'achievement',
            'fees', 'concession', 'assign-fee', 'fee-deposit',
            'nursery-to-nine', 'admission-eleven', 'news', 'testimonial',
            'events', 'gallery', 'enquiry', 'roles',
        ];

        foreach ($pages as $page) {
            Permission::firstOrCreate([
                'role_id' => $role->id,
                'page_slug' => $page,
            ]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasColumn('admins', 'role_id')) {
            Schema::table('admins', function (Blueprint $table) {
                $table->dropForeign(['role_id']);
                $table->dropColumn('role_id');
            });
        }

        Schema::dropIfExists('permissions');
        Schema::dropIfExists('roles');
    }
};
