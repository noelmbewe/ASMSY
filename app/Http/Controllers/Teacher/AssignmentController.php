<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Assignment;
use App\Models\ClassSubject;


use App\Models\Teacher;
use App\Models\SchoolClass;
use App\Models\Subject; // Add this line
use Illuminate\Http\Request;

class AssignmentController extends Controller
{
    public function index()
    {
        // Fetch assignments with the subject and class relationships
        $assignments = Assignment::where('teacherID', auth()->id())
            ->with('subject', 'class') // Eager load subject and class relationships
            ->get();
        
        return view('teacher.assignment.index', compact('assignments'));
    }
    
    
 
    public function create()
    {
        // Get the teacher's available subjects for assignment
        $teacherID = auth()->user()->id; // Assuming the teacher is authenticated
        $classSubjects = ClassSubject::with('subject', 'class')
            ->where('teacherID', $teacherID)
            ->get();
        
        // Return the view with class subjects for the teacher
        return view('teacher.assignment.create', compact('classSubjects'));
    }
   
    

    public function store(Request $request)
    {
        $request->validate([
            'classSubjectID' => 'required|exists:classsubject,classSubjectID',
            'title' => 'required|string|max:50',
            'totalMarks' => 'required|integer',
            'dueDate' => 'required|date',
        ]);
    
        // Retrieve the ClassSubject instance
        $classSubject = ClassSubject::findOrFail($request->classSubjectID);
    
        // Create the assignment using classSubject data
        Assignment::create([
            'teacherID' => auth()->id(),
            'subjectID' => $classSubject->subjectID,
            'classID' => $classSubject->classID,
            'title' => $request->title,
            'totalMarks' => $request->totalMarks,
            'dueDate' => $request->dueDate,
            'description' => $request->description ?? '',
            'status' => 0, // default status
        ]);
    
        return redirect()->route('teacher.assignment.index')->with('success', 'Assignment created successfully!');
    }
    
    

    public function edit($assignmentID)
{

    $teacherID = auth()->user()->id; // Assuming the teacher is authenticated
    $classSubjects = ClassSubject::with('subject', 'class')
        ->where('teacherID', $teacherID)
        ->get();
    // Fetch the assignment by its assignmentID
    $assignment = Assignment::findOrFail($assignmentID);



    // Pass both the assignment and class subjects data to the view
    return view('teacher.assignment.edit', compact('assignment', 'classSubjects'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'totalMarks' => 'required|integer',
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:200',
            'dueDate' => 'required|date',
        ]);

        $assignment = Assignment::findOrFail($id);
        $assignment->update($request->all());

        return redirect()->route('teacher.assignment.index')->with('success', 'Assignment updated successfully');
    }

    public function destroy($id)
    {
        $assignment = Assignment::findOrFail($id);
        $assignment->delete();

        return redirect()->route('teacher.assignment.index')->with('success', 'Assignment deleted successfully');
    }
}

