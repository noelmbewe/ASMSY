<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchoolClass extends Model
{
    protected $table = 'class';
    protected $primaryKey = 'classID';
    protected $fillable = ['className', 'teacherID', 'date'];

       
        public function teacher()
        {
            return $this->belongsTo(Teacher::class, 'teacherID', 'id'); // Foreign key and teacher's id
        }
        public function classSubjects()
    {
        return $this->hasMany(ClassSubject::class, 'classID');
    }
    
}
