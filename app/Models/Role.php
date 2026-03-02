<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'status'];

    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }

    /**
     * Check if role has permission for a specific page
     */
    public function hasPermission($pageSlug)
    {
        return $this->permissions()->where('page_slug', $pageSlug)->exists();
    }

    /**
     * Get all permitted page slugs
     */
    public function getPermittedPages()
    {
        return $this->permissions()->pluck('page_slug')->toArray();
    }
}
