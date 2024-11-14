@extends('layouts.admin')

@section('title', 'Edit Subject')

@section('contents')

<div class="dashboard-content-one">
    <div class="breadcrumbs-area">
        <h3>Subjects</h3>
        <ul>
            <li>
                <a href="{{ route('admin.index') }}">Home</a>
            </li>
            <li>Edit Subject</li>
        </ul>
    </div>

    <div class="card height-auto">
        <div class="card-body">
            <form class="new-added-form" action="{{ route('subjects.update', $subject->subjectID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Subject Name *</label>
                        <input type="text" name="subject_name" value="{{ $subject->subject_name }}" class="form-control" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Subject Type *</label>
                        <input type="text" name="subject_type" value="{{ $subject->subject_type }}" class="form-control" required>
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                        <a href="{{ route('subjects.index') }}" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
