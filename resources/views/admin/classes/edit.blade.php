@extends('layouts.admin')

@section('title', 'Edit Class')

@section('contents')

<div class="dashboard-content-one">
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Class</h3>
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>Edit Class</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <!-- Edit Class Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Edit Class</h3>
                </div>
            </div>

            <!-- Display Errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="new-added-form" action="{{ route('classes.update', $class->classID) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Class Name *</label>
                        <input type="text" name="className" value="{{ $class->className }}" class="form-control" required>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-12 form-group">
                        <label>Assign Teacher</label>
                        <select name="teacherID" class="form-control select2">
                            <option value="">Select Teacher</option>
                            @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}" {{ $class->teacherID == $teacher->id ? 'selected' : '' }}>
                                    {{ $teacher->first_name }} {{ $teacher->last_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                        <a href="{{ route('classes.index') }}" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Back</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit Class Area End Here -->

@endsection
