<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Concession extends Model
{
    use HasFactory;

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
    public function getStudentAdmission()
    {
        return $this->belongsTo(StudentAdmission::class, 'student_admission_id');
    }
}
