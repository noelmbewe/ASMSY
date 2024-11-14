@extends('layouts.teacher')

@section('title', 'Edit Assignment')

@section('contents')

    <div class="dashboard-content-one">
        <!-- Breadcrumbs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Assignments</h3>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>Edit Assignment</li>
            </ul>
        </div>
        
        <!-- Success Message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Breadcrumbs Area End Here -->

        <!-- Edit Assignment Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Assignment</h3>
                    </div>
                </div>

                <!-- The edit form -->
                <form class="new-added-form" action="{{ route('teacher.assignment.update', $assignment->assignmentID) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Use PUT method for update -->

                    <div class="row">
                        <!-- Class and Subject -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Class and Subject *</label>
                            <select name="classSubjectID" class="form-control" required>
                                <option value="">Please Select Class and Subject</option>
                                @foreach ($classSubjects as $classSubject)
                                    <option value="{{ $classSubject->classSubjectID }}"
                                        {{ $assignment->classSubjectID == $classSubject->classSubjectID ? 'selected' : '' }}>
                                        {{ $classSubject->subject->subject_name }} (Class: {{ $classSubject->class->className }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Assignment Title -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Assignment Title *</label>
                            <input type="text" name="title" class="form-control" value="{{ $assignment->title }}" required>
                        </div>

                        <!-- Total Marks -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Total Marks *</label>
                            <input type="number" name="totalMarks" class="form-control" value="{{ $assignment->totalMarks }}" required>
                        </div>

                        <!-- Due Date -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Due Date *</label>
                            <input type="date" name="dueDate" class="form-control" value="{{ $assignment->dueDate }}" required>
                        </div>

                        <!-- Description -->
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Description *</label>
                            <textarea name="description" class="form-control" required>{{ $assignment->description }}</textarea>
                        </div>

                        <!-- Form Actions -->
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                            <a href="{{ route('teacher.assignment.index') }}" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Edit Assignment Area End Here -->

@endsection
