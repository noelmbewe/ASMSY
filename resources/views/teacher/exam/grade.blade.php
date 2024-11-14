@extends('layouts.teacher')

@section('contents')
<div class="breadcrumbs-area">
    <h3>Grade Assignment</h3>
    <ul>
        <li><a href="teacher.index">Home</a></li>
        <li>Grade Assignment</li>
    </ul>
</div>

<div class="row">
    <div class="col-12-xxxl col-12">
        <div class="card height-auto">
            <div class="card-body">
                <h3>Class: <strong>{{ $class->className }}</strong>, Subject: <strong>{{ $exam->subject->subject_name }}</strong>, Assignment Title: <strong>{{ $exam->title }}</strong>, Total Marks: <strong>{{ $exam->totalMarks }}</strong></h3>

                <form action="{{ route('teacher.exam.grade.store') }}" method="POST">
                    @csrf
                    <table class="table display data-table text-nowrap">
                        <thead>
                            <tr>
                                <th>Student Name</th>
                                <th>Score</th>
                                <th>Exam</th>
                                <th>class</th>
                                <th>Comment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td>{{ $student->firstname }} {{ $student->lastname }}</td>
                                    <td>
                                        <input type="number" name="scores[{{ $student->studentID }}]" placeholder="Enter Score" required>
                                    </td>
                                    <td>  
                                        <input type="text" name="examID"   value ="{{ $exam->subject->subjectID }}" placeholder="{{ $exam->subject->subjectID }}" required>
                                    </td>
                                    <td>
                                        <input type="text" name="classID" value ="{{ $class->classID }}" placeholder="{{ $class->classID }}" required>
                                    </td>

                                    <td>
                                        <textarea name="comments" placeholder="Enter Comment" required></textarea>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Save Grades</button>
                </form>
            </div>
        </div>
    </div>
    
   
@endsection
