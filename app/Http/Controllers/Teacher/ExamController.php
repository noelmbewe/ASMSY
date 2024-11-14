<?php
namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Exam;
use App\Models\Student;
use App\Models\ExamGrade;


use App\Models\ClassSubject;
use App\Models\Teacher;
use App\Models\SchoolClass;
use App\Models\Subject;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function index()
    {
        // Fetch exams with the subject and class relationships
        $exams = Exam::where('teacherID', auth()->id())
            ->with('subject', 'class') // Eager load subject and class relationships
            ->get();

        return view('teacher.exam.index', compact('exams'));
    }

    public function create()
    {
        // Get the teacher's available subjects for exam
        $teacherID = auth()->user()->id; // Assuming the teacher is authenticated
        $classSubjects = ClassSubject::with('subject', 'class')
            ->where('teacherID', $teacherID)
            ->get();

        // Return the view with class subjects for the teacher
        return view('teacher.exam.create', compact('classSubjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'classSubjectID' => 'required|exists:classsubject,classSubjectID',
            'title' => 'required|string|max:50',
            'totalMarks' => 'required|integer',
            'date' => 'required|date',
            'type' => 'required|integer', // Exam type (e.g., midterm, final)
        ]);

        // Retrieve the ClassSubject instance
        $classSubject = ClassSubject::findOrFail($request->classSubjectID);

        // Create the exam using classSubject data
        Exam::create([
            'teacherID' => auth()->id(),
            'subjectID' => $classSubject->subjectID,
            'classID' => $classSubject->classID,
            'title' => $request->title,
            'totalMarks' => $request->totalMarks,
            'date' => $request->date,
            'type' => $request->type,
            'description' => $request->description ?? '',
            'status' => 0, // default status
        ]);

        return redirect()->route('teacher.exam.index')->with('success', 'Exam created successfully!');
    }

    public function edit($examID)
    {
        $teacherID = auth()->user()->id; // Assuming the teacher is authenticated
        $classSubjects = ClassSubject::with('subject', 'class')
            ->where('teacherID', $teacherID)
            ->get();

        // Fetch the exam by its examID
        $exam = Exam::findOrFail($examID);

        // Pass both the exam and class subjects data to the view
        return view('teacher.exam.edit', compact('exam', 'classSubjects'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'totalMarks' => 'required|integer',
            'title' => 'required|string|max:50',
            'description' => 'required|string|max:200',
            'date' => 'required|date',
            'type' => 'required|integer',
        ]);

        $exam = Exam::findOrFail($id);
        $exam->update($request->all());

        return redirect()->route('teacher.exam.index')->with('success', 'Exam updated successfully');
    }

    public function destroy($id)
    {
        $exam = Exam::findOrFail($id);
        $exam->delete();

        return redirect()->route('teacher.exam.index')->with('success', 'Exam deleted successfully');
    }


    public function showGradePage($examID)
{
    $exam = Exam::findOrFail($examID);
    $class = SchoolClass::findOrFail($exam->classID);
    $students = Student::where('classID', $class->classID)->get();

    return view('teacher.exam.grade', compact('exam', 'class', 'students'));
}





public function storeGrades(Request $request)
{
    $examID = $request->input('examID');
    $classID = $request->input('classID');
    $scores = $request->input('scores');
    $comments = $request->input('comments');

    foreach ($scores as $studentID => $score) {
        ExamGrade::create([
            'studentID' => $studentID,
            'examID' => $examID,
            'classID' => $classID,
            'score' => $score,
       
            'comment' => $comments,
        ]);
    }

    return redirect()->route('teacher.exam.index')->with('success', 'Grades saved successfully.');
}


}
