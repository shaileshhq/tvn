<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'slug', 'short_desc', 'description', 'tag', 'date', 'image', 'multi_images'];
    protected $casts = [
        'multi_images' => 'array',
    ];

}
