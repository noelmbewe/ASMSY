@extends('layouts.admin')

@section('title', 'Assign Subject to Class')

@section('contents')
<div class="dashboard-content-one">
    <div class="breadcrumbs-area">
        <h3>Assign Subject to Class and Teacher</h3>
        <ul>
            <li><a href="{{ route('admin.index') }}">Home</a></li>
            <li>Assign Subject</li>
        </ul>
    </div>

    <div class="card height-auto">
        <div class="card-body">
            <h3>Assign Subject</h3>

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('classsubject.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="subjectID">Select Subject</label>
                    <select name="subjectID" class="form-control">
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->subjectID }}">{{ $subject->subject_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="classID">Select Class</label>
                    <select name="classID" class="form-control">
                        @foreach($classes as $class)
                            <option value="{{ $class->classID }}">{{ $class->className }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="teacherID">Select Teacher</label>
                    <select name="teacherID" class="form-control">
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}">{{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Assign Subject</button>
            </form>
        </div>
    </div>
</div>
@endsection
