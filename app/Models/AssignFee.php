<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignFee extends Model
{
    use HasFactory;

    protected $casts = [
        'month' => 'array'
    ];

    public function getAcademicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'academic_year_id');
    }
    public function getClassMaster()
    {
        return $this->belongsTo(ClassMaster::class, 'class_id');
    }
    public function getFees()
    {
        return $this->belongsTo(Fees::class, 'fee_id');
    }
}
