@extends('layouts.teacher')

@section('title', 'Manage Exams')

@section('contents')
<div class="dashboard-content-one">
    <div class="breadcrumbs-area">
        <h3>Exams</h3>
        <ul>
            <li>
                <a href="{{ route('teacher.index') }}">Home</a>
            </li>
            <li>All Exams</li>
        </ul>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card height-auto">
        <div class="card-body">
            <div class="d-flex justify-content-end col-3 mb-4">
                <a href="{{ route('teacher.exam.create') }}" class="fw-btn-fill btn-gradient-yellow">Create New Exam</a>
            </div>

            <div class="table-responsive">
                <table class="table display data-table text-nowrap" id="tableExport">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Class</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Total Marks</th>
                            <th>Exam Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($exams as $exam)
                        <tr>
                            <td>{{ $exam->examID }}</td>
                            <td>{{ $exam->title }}</td>
                            <td>{{ $exam->class->className ?? 'N/A' }}</td>
                            <td>{{ $exam->subject->subject_name ?? 'N/A' }}</td>
                            <td>{{ $exam->description }}</td>
                            <td>{{ $exam->totalMarks }}</td>
                            <td>{{ $exam->date }}</td>
                            <td>
                                @if($exam->status)
                                    <span class="badge badge-pill badge-success d-block mg-t-8">Graded</span>
                                @else
                                    <span class="badge badge-pill badge-danger d-block mg-t-8">Not Graded</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="flaticon-more-button-of-three-dots"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                         <a  class="btn btn-primary">Grade Exam</a>
                                        
                                         <a href="{{ route('teacher.exam.grade', ['examID' => $exam->examID]) }}" class="btn btn-primary">Grade Exam</a>

                                        <a class="dropdown-item" href="{{ route('teacher.exam.edit', $exam->examID) }}">Edit</a>
                                        <form action="{{ route('teacher.exam.destroy', $exam->examID) }}" method="POST" onsubmit="return confirm('Delete this exam?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
