<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherManageController extends Controller
{
    // Display a listing of teachers
    public function index()
    {
        $teachers = Teacher::all();  // Fetch all teachers
        return view('admin.teachers.index', compact('teachers'));
    }

    // Show the form for creating a new teacher
    public function create()
    {
        return view('admin.teachers.create');  // Form for adding a new teacher
    }

    // Store a newly created teacher in the database
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email',
            'phone_number' => 'required|string|max:20',
            'gender' => 'required|string',
            'hire_date' => 'required|date',
            'subject' => 'required|string|max:255',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048', // CV can be optional
        ]);

        // Store teacher and CV
        $cvFile = null;
        if ($request->hasFile('cv')) {
            $cvFile = $request->file('cv')->store('cvs', 'public');  // Store the CV file
        }

        Teacher::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'hire_date' => $request->hire_date,
            'subject' => $request->subject,
            'bio' => $request->bio,
            'cv' => $cvFile,
        ]);

        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully.');
    }

    // Show the form for editing the specified teacher
    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    // Update the specified teacher in the database
    public function update(Request $request, Teacher $teacher)
    {
        // Validation
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'phone_number' => 'required|string|max:20',
            'gender' => 'required|string',
            'hire_date' => 'required|date',
            'subject' => 'required|string|max:255',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        // Update CV if uploaded
        if ($request->hasFile('cv')) {
            // Delete the old CV file
            if ($teacher->cv) {
                Storage::disk('public')->delete($teacher->cv);
            }
            // Store the new CV file
            $teacher->cv = $request->file('cv')->store('cvs', 'public');
        }

        // Update teacher info
        $teacher->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'gender' => $request->gender,
            'hire_date' => $request->hire_date,
            'subject' => $request->subject,
            'bio' => $request->bio,
            'cv' => $teacher->cv,
        ]);

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully.');
    }

    // Remove the specified teacher from the database
    public function destroy(Teacher $teacher)
    {
        // Delete the CV file if it exists
        if ($teacher->cv) {
            Storage::disk('public')->delete($teacher->cv);
        }

        // Delete the teacher record
        $teacher->delete();

        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully.');
    }
}
