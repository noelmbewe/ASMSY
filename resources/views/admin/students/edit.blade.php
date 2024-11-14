@extends('layouts.admin')

@section('title', 'Edit Student')

@section('contents')

<div class="dashboard-content-one">
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Edit Student</h3>
        <ul>
            <li>
                <a href="{{ route('admin.index') }}">Home</a>
            </li>
            <li>Edit Student</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Edit Student Information</h3>
                </div>
            </div>

            <!-- Display validation errors -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Edit Student Form -->
            <form action="{{ route('admin.students.update', $student->studentID) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- First Name -->
                    <div class="col-12 form-group">
                        <label>First Name</label>
                        <input type="text" name="firstname" value="{{ old('firstname', $student->firstname) }}" class="form-control">
                    </div>

                    <!-- Last Name -->
                    <div class="col-12 form-group">
                        <label>Last Name</label>
                        <input type="text" name="lastname" value="{{ old('lastname', $student->lastname) }}" class="form-control">
                    </div>

                    <!-- Gender -->
                    <div class="col-12 form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="Male" {{ $student->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $student->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <!-- Home District -->
                    <div class="col-12 form-group">
                        <label>Home District</label>
                        <input type="text" name="homeDistrict" value="{{ old('homeDistrict', $student->homeDistrict) }}" class="form-control">
                    </div>

                    <!-- Area -->
                    <div class="col-12 form-group">
                        <label>Area</label>
                        <input type="text" name="area" value="{{ old('area', $student->area) }}" class="form-control">
                    </div>

                    <!-- Date of Birth -->
                    <div class="col-12 form-group">
                        <label>Date of Birth</label>
                        <input type="date" name="DOB" value="{{ old('DOB', $student->DOB) }}" class="form-control">
                    </div>

                    <!-- Admission Date -->
                    <div class="col-12 form-group">
                        <label>Admission Date</label>
                        <input type="date" name="admissionDate" value="{{ old('admissionDate', $student->admissionDate) }}" class="form-control">
                    </div>

                    <!-- Parent ID -->
                    <div class="col-12 form-group">
                        <label>Parent ID</label>
                        <input type="number" name="parentID" value="{{ old('parentID', $student->parentID) }}" class="form-control">
                    </div>

                    <!-- Class ID -->
                    <div class="col-12 form-group">
                        <label>Class ID</label>
                        <input type="number" name="classID" value="{{ old('classID', $student->classID) }}" class="form-control">
                    </div>

                    <!-- Save Button -->
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">Save Changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
