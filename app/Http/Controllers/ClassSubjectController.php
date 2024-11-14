<?php
namespace App\Http\Controllers;

use App\Models\ClassSubject;
use App\Models\Subject;
use App\Models\SchoolClass;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassSubjectController extends Controller
{
    public function index()
    {
        $classSubjects = ClassSubject::with(['subject', 'class', 'teacher'])->get();
        return view('admin.classsubjects.index', compact('classSubjects'));
    }
    
    public function create()
    {
        $subjects = Subject::all();
        $classes = SchoolClass::all();
        $teachers = Teacher::all();
        return view('admin.classsubjects.create', compact('subjects', 'classes', 'teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'subjectID' => 'required|exists:subjects,subjectID',
            'classID' => 'required|exists:class,classID',
            'teacherID' => 'required|exists:teachers,id',
        ]);

        // Check if the subject is already assigned to the class
        $existingAssignment = ClassSubject::where('subjectID', $request->subjectID)
            ->where('classID', $request->classID)
            ->first();

        if ($existingAssignment) {
            $assignedTeacher = Teacher::find($existingAssignment->teacherID);
            return redirect()->back()->with('error', 'Subject is already assigned to this class by ' . $assignedTeacher->first_name . ' ' . $assignedTeacher->last_name);
        }

        ClassSubject::create($request->only('subjectID', 'classID', 'teacherID'));
        return redirect()->route('classsubject.index')->with('success', 'Subject assigned successfully!');
    }

    public function edit($subjectID, $classID)
    {
        $classSubject = ClassSubject::where('subjectID', $subjectID)
            ->where('classID', $classID)
            ->firstOrFail();
        
        $subjects = Subject::all();
        $classes = SchoolClass::all();
        $teachers = Teacher::all();

        return view('admin.classsubjects.edit', compact('classSubject', 'subjects', 'classes', 'teachers'));
    }

    public function update(Request $request, $subjectID, $classID)
{
    // Validate the request data
    $validated = $request->validate([
        'teacherID' => 'required|exists:teachers,id', // Reference 'id' here instead of 'teacherID'
        'date' => 'required|date',
    ]);

    // Find the class subject based on subjectID and classID
    $classSubject = ClassSubject::where('subjectID', $subjectID)
                                ->where('classID', $classID)
                                ->firstOrFail();

    // Update the class subject record
    $classSubject->update([
        'teacherID' => $validated['teacherID'],
        'date' => $validated['date'],
    ]);

    // Redirect back with a success message
    return redirect()->route('classsubject.index')->with('success', 'Class subject updated successfully');
}

  

    public function destroy($subjectID, $classID)
{
    // Find the class subject based on subjectID and classID
    $classSubject = ClassSubject::where('subjectID', $subjectID)
                                ->where('classID', $classID)
                                ->firstOrFail();

    // Delete the class subject record
    $classSubject->delete();

    // Redirect back with a success message
    return redirect()->route('classsubject.index')->with('success', 'Class subject deleted successfully');
}

}
