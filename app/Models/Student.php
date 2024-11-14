<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $primaryKey = 'studentID';

    protected $fillable = [
        'firstname',
        'lastname',
        'gender',
        'homeDistrict',
        'area',
        'DOB',
        'admissionDate',
        'schoolID',
        'parentID',
        'classID',
    ];

    public function parent()
    {
        return $this->belongsTo(Parents::class, 'parentID', 'parentID');
    }

    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'classID');
    }
}
