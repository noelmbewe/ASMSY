@extends('layouts.admin')

@section('title', 'Edit Class Subject Assignment')

@section('contents')
<div class="dashboard-content-one">
    <div class="breadcrumbs-area">
        <h3>Edit Class Subject Assignment</h3>
        <ul>
            <li><a href="{{ route('admin.index') }}">Home</a></li>
            <li>Edit Class Subject</li>
        </ul>
    </div>

    <div class="card height-auto">
        <div class="card-body">
            <h3>Edit Subject Assignment</h3>

            <form action="{{ route('classsubject.update', ['subjectID' => $classSubject->subjectID, 'classID' => $classSubject->classID]) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="subjectID">Select Subject</label>
                    <select name="subjectID" class="form-control" disabled>
                        @foreach($subjects as $subject)
                            <option value="{{ $subject->subjectID }}" {{ $subject->subjectID == $classSubject->subjectID ? 'selected' : '' }}>
                                {{ $subject->subject_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="classID">Select Class</label>
                    <select name="classID" class="form-control" disabled>
                        @foreach($classes as $class)
                            <option value="{{ $class->classID }}" {{ $class->classID == $classSubject->classID ? 'selected' : '' }}>
                                {{ $class->className }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="teacherID">Select Teacher</label>
                    <select name="teacherID" class="form-control">
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->id }}" {{ $teacher->id == $classSubject->teacherID ? 'selected' : '' }}>
                                {{ $teacher->first_name }} {{ $teacher->last_name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Update Assignment</button>
            </form>
        </div>
    </div>
</div>
@endsection
