<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TcUpload extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['admission_no', 'tc_no', 'file'];
}
