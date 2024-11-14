<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone_number',
        'gender',
        'hire_date',
        'subject',
        'qualification',
        'bio',
        'cv',
    ];
    public function classSubjects()
    {
        return $this->hasMany(ClassSubject::class, 'teacherID');
    }

    public function exams()
{
    return $this->hasMany(Exam::class, 'teacherID');
}

}
