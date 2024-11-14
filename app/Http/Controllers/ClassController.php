<?php

namespace App\Http\Controllers;

use App\Models\SchoolClass;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    // Display a listing of the resource
   
    public function index()
{
    // Eager load the teacher relationship to reduce queries
    $classes = SchoolClass::with('teacher')->get();

    return view('admin.classes.index', compact('classes'));
}

    // Show the form for creating a new resource
    public function create()
    {
        $teachers = Teacher::all();
        return view('admin.classes.create', compact('teachers'));
    }
    

    // Store a newly created resource in storage
    public function store(Request $request)
    {
        $request->validate([
            'className' => 'required|string|max:60',
            'teacherID' => 'nullable|exists:teachers,id',
        ]);

        SchoolClass::create([
            'className' => $request->input('className'),
            'teacherID' => $request->input('teacherID'),
        ]);

        return redirect()->route('classes.index')->with('success', 'Class added successfully.');
    }

    // Display the specified resource
    public function show($id)
    {
        $class = SchoolClass::findOrFail($id);
        return view('admin.classes.show', compact('class'));
    }

    // Show the form for editing the specified resource
    public function edit($id)
    {
        $class = SchoolClass::findOrFail($id);
        $teachers = Teacher::all(); // Assuming you have a Teacher model
        return view('admin.classes.edit', compact('class', 'teachers'));
    }
    
    // Update the specified resource in storage
    public function update(Request $request, $id)
    {
        $request->validate([
            'className' => 'required|string|max:60',
            'teacherID' => 'nullable|exists:teachers,id',
        ]);

        $class = SchoolClass::findOrFail($id);
        $class->update([
            'className' => $request->input('className'),
            'teacherID' => $request->input('teacherID'),
        ]);

        return redirect()->route('classes.index')->with('success', 'Class updated successfully.');
    }

    // Remove the specified resource from storage
    public function destroy($id)
    {
        $class = SchoolClass::findOrFail($id);
        $class->delete();

        return redirect()->route('classes.index')->with('success', 'Class deleted successfully.');
    }
}
