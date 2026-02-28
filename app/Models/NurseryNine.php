<?php

namespace App\Models;

use App\Models\ClassMaster;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NurseryNine extends Model
{
    use HasFactory;

    public function getClass()
    {
        return $this->belongsTo(ClassMaster::class, 'class');
    }
}
