<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $table = 'exam';

    protected $primaryKey = 'examID';

    // Set the primary key to be non-incrementing if it’s not AUTO_INCREMENT
    public $incrementing = true;

    protected $keyType = 'int';

    protected $fillable = [
        'examID',

        'subjectID',
        'classID',
        'academicID',
        'totalMarks',
        'title',
        'description',
        'date',
        'type',
        'status',
        'teacherID',
    ];

    // Define relationships
    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subjectID');
    }

    public function class()
    {
        return $this->belongsTo(SchoolClass::class, 'classID');
    }

    public function teacher()
{
    return $this->belongsTo(Teacher::class, 'teacherID');
}

}
