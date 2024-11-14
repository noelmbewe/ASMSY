<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $table = 'assignments';

    protected $primaryKey = 'assignmentID';

    // Set the primary key to be non-incrementing if it’s not AUTO_INCREMENT
    public $incrementing = true;

    // Specify the key type (assuming assignmentID is an integer)
    protected $keyType = 'int';

    protected $fillable = [
        'assignmentID',
        'teacherID',
        'subjectID',
        'classID',
        'academicID',
        'totalMarks',
        'title',
        'description',
        'dueDate',
        'status'
    ];

    // Define relationships
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacherID');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subjectID');
    }

    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'classID');
    }


    public function classSubject()
{
    return $this->belongsTo(ClassSubject::class, 'classSubjectID');
}

}
