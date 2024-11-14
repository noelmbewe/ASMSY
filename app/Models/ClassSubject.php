<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSubject extends Model
{
    use HasFactory;

    protected $table = 'classsubject';
    protected $primaryKey = 'classSubjectID';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'subjectID',
        'classID',
        'teacherID',
        'date',
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
    return $this->belongsTo(Teacher::class, 'teacherID', 'id'); // Replace 'teacherID' with 'id'
}


}
