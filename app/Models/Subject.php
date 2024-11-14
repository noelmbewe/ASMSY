<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $primaryKey = 'subjectID';
    public $timestamps = false; // You have no created_at and updated_at fields

    protected $fillable = [
        'subject_name',
        'subject_type',
        'date',
    ];
   
    public function classSubjects()
    {
        return $this->hasMany(ClassSubject::class, 'subjectID');
    }
  

}
