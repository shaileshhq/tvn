<?php

namespace App\Models;

use App\Models\AcademicYear;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory, SoftDeletes;

    public function getAcademicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year');
    }
}
