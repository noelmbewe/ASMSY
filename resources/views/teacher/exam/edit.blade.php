@extends('layouts.teacher')

@section('title', 'Edit Exam')

@section('contents')

    <div class="dashboard-content-one">
        <!-- Breadcrumbs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Exams</h3>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>Edit Exam</li>
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

        <!-- Edit Exam Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Exam</h3>
                    </div>
                </div>
                <form class="new-added-form" action="{{ route('teacher.exam.update', ['examID' => $exam->examID]) }}" method="POST">

                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- Class and Subject -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Class and Subject *</label>
                            <select name="classSubjectID" class="form-control" required>
                                <option value="">Please Select Class and Subject</option>
                                @foreach ($classSubjects as $classSubject)
                                    <option value="{{ $classSubject->classSubjectID }}"
                                        {{ $exam->subjectID == $classSubject->subjectID && $exam->classID == $classSubject->classID ? 'selected' : '' }}>
                                        {{ $classSubject->subject->subject_name }} (Class: {{ $classSubject->class->className }})
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Exam Title -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Exam Title *</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $exam->title) }}" required>
                        </div>

                        <!-- Total Marks -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Total Marks *</label>
                            <input type="number" name="totalMarks" class="form-control" value="{{ old('totalMarks', $exam->totalMarks) }}" required>
                        </div>

                        <!-- Exam Type -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Exam Type *</label>
                            <select name="type" class="form-control" required>
                                <option value="1" {{ $exam->type == 1 ? 'selected' : '' }}>Final</option>
                                <option value="2" {{ $exam->type == 2 ? 'selected' : '' }}>Mid-Term</option>
                            </select>
                        </div>

                        <!-- Exam Date -->
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Exam Date *</label>
                            <input type="date" name="date" class="form-control" value="{{ old('date', $exam->date) }}" required>
                        </div>

                        <!-- Description -->
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <label>Description *</label>
                            <textarea name="description" class="form-control" required>{{ old('description', $exam->description) }}</textarea>
                        </div>

                        <!-- Form Actions -->
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                            <a href="{{ route('teacher.exam.index') }}" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Edit Exam Area End Here -->
    

@endsection
