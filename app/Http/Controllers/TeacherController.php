<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('admin.teachers.index', compact('teachers'));
    }

    public function create()
    {
        return view('admin.teachers.create');
    }

    public function store(Request $request)
{
    // Validate incoming data
    $validatedData = $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|unique:teachers,email',
        'phone_number' => 'nullable|string|max:20',
        'gender' => 'required|string',
        'hire_date' => 'nullable|date',
        'qualification' => 'nullable|string|max:255',
        'bio' => 'nullable|string',
        'subject' => 'required|string|max:255',
        'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
    ]);

    // Handle CV upload if it exists
    if ($request->hasFile('cv')) {
        // Store the uploaded CV in the 'storage/app/public/cvs' directory
        $filePath = $request->file('cv')->store('cvs', 'public');
        $validatedData['cv'] = $filePath;
    }

    // Create new teacher record in the database
    Teacher::create($validatedData);

    // Redirect to the teacher index with a success message
    return redirect()->route('admin.teachers.index')->with('success', 'Teacher created successfully');
}

    public function edit(Teacher $teacher)
    {
        return view('admin.teachers.edit', compact('teacher'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'phone_number' => 'nullable|string|max:20',
            'gender' => 'required|string',
            'hire_date' => 'nullable|date',
            'qualification' => 'nullable|string|max:255',
            'bio' => 'nullable|string',
            'subject' => 'required|string|max:255',
            'cv' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('cv')) {
            // Delete old CV file if exists
            if ($teacher->cv && Storage::exists($teacher->cv)) {
                Storage::delete($teacher->cv);
            }

            $filePath = $request->file('cv')->store('cvs');
            $validatedData['cv'] = $filePath;
        }

        $teacher->update($validatedData);

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher updated successfully');
    }

    public function destroy(Teacher $teacher)
    {
        if ($teacher->cv && Storage::exists($teacher->cv)) {
            Storage::delete($teacher->cv);
        }

        $teacher->delete();

        return redirect()->route('admin.teachers.index')->with('success', 'Teacher deleted successfully');
    }
}
