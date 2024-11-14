<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all(); // Fetch all subjects
        return view('admin.subjects.index', compact('subjects'));
    }

    public function create()
    {
        return view('admin.subjects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subject_name' => 'required',
            'subject_type' => 'required',
        ]);

        Subject::create($request->all());

        return redirect()->route('subjects.index')->with('success', 'Subject created successfully.');
    }

    public function edit($id)
    {
        $subject = Subject::findOrFail($id);
        return view('admin.subjects.edit', compact('subject'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'subject_name' => 'required',
            'subject_type' => 'required',
        ]);

        $subject = Subject::findOrFail($id);
        $subject->update($request->all());

        return redirect()->route('subjects.index')->with('success', 'Subject updated successfully.');
    }

    public function destroy($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();

        return redirect()->route('subjects.index')->with('success', 'Subject deleted successfully.');
    }
}
