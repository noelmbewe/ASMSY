<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamGrade extends Model
{
    use HasFactory;

    // Define the table name if it doesn't follow Laravel's convention of 'exam_grades'
    protected $table = 'examgrade';

    // Define the fillable properties
    protected $fillable = [
        'studentID',
        'examID',
        'classID',
        'score',
        'comment',
    ];

    /**
     * Relationships with other models (if needed)
     */

    // Assuming there's a Student model related to the grade
    public function student()
    {
        return $this->belongsTo(Student::class, 'studentID');
    }

    // Assuming there's an Exam model related to the grade
    public function exam()
    {
        return $this->belongsTo(Exam::class, 'examID');
    }

    // Assuming there's a SchoolClass model related to the grade
    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'classID');
    }
}
