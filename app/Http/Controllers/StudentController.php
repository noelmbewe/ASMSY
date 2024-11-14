<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Parents;
use App\Models\SchoolClass;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('parent','class')->get();
        return view('admin.students.index', compact('students'));
    }

    public function create()
    {
        $classes = SchoolClass::all();
        $parents = Parents::all(); // Get all parents to show in the dropdown
        return view('admin.students.create', compact('parents', 'classes'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'firstname' => 'required|string|max:60',
            'lastname' => 'required|string|max:60',
            'gender' => 'required|in:Male,Female',
            'homeDistrict' => 'required|string|max:60',
            'area' => 'required|string|max:60',
            'DOB' => 'nullable|date',
            'admissionDate' => 'nullable|date',
            'schoolID' => 'nullable|integer',
            'parentID' => 'nullable|integer|exists:parents,parentID', // Validate that parent exists
            'classID' => 'nullable|integer',
        ]);

        Student::create($validatedData);

        return redirect()->route('admin.students.index')->with('success', 'Student created successfully.');
    }

    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $parents = Parents::all();
        return view('admin.students.edit', compact('student', 'parents'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);

        $validatedData = $request->validate([
            'firstname' => 'required|string|max:60',
            'lastname' => 'required|string|max:60',
            'gender' => 'required|in:Male,Female',
            'homeDistrict' => 'required|string|max:60',
            'area' => 'required|string|max:60',
            'DOB' => 'nullable|date',
            'admissionDate' => 'nullable|date',
            'schoolID' => 'nullable|integer',
            'parentID' => 'nullable|integer|exists:parents,parentID',
            'classID' => 'nullable|integer',
        ]);

        $student->update($validatedData);

        return redirect()->route('admin.students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('admin.students.index')->with('success', 'Student deleted successfully.');
    }
}
