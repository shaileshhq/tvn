<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'role_id',
    ];

    protected $hidden = [
        'password',
        'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    /**
     * Check if admin has permission for a specific page
     */
    public function hasPagePermission($pageSlug)
    {
        // If no role assigned, deny access
        if (!$this->role) {
            return false;
        }

        return $this->role->hasPermission($pageSlug);
    }

    /**
     * Check if admin is Super Admin
     */
    public function isSuperAdmin()
    {
        return $this->role && $this->role->name === 'Super Admin';
    }
}
