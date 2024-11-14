@extends('layouts.admin')

@section('title', 'Dashboard')

@section('contents')

    <div class="dashboard-content-one">
        <!-- Breadcrumbs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Teacher</h3>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>Edit Teacher</li>
            </ul>
        </div>
        <!-- Breadcrumbs Area End Here -->

        <!-- Edit Teacher Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Edit Teacher</h3>
                    </div>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">...</a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#"><i class="fas fa-times text-orange-red"></i>Close</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-redo-alt text-orange-peel"></i>Refresh</a>
                        </div>
                    </div>
                </div>

                <form class="new-added-form" action="{{ route('teachers.update', $teacher->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>First Name *</label>
                            <input type="text" name="first_name" class="form-control" value="{{ $teacher->first_name }}" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Last Name *</label>
                            <input type="text" name="last_name" class="form-control" value="{{ $teacher->last_name }}" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" value="{{ $teacher->email }}" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Phone *</label>
                            <input type="text" name="phone_number" class="form-control" value="{{ $teacher->phone_number }}">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Gender *</label>
                            <select name="gender" class="select2">
                                <option value="male" {{ $teacher->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $teacher->gender == 'female' ? 'selected' : '' }}>Female</option>
                                <option value="other" {{ $teacher->gender == 'other' ? 'selected' : '' }}>Others</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Hire Date *</label>
                            <input type="date" name="hire_date" class="form-control" value="{{ $teacher->hire_date }}">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" value="{{ $teacher->subject }}" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Qualification</label>
                            <input type="text" name="qualification" class="form-control" value="{{ $teacher->qualification }}">
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label>Short Bio</label>
                            <textarea class="textarea form-control" name="bio" cols="10" rows="9">{{ $teacher->bio }}</textarea>
                        </div>
                        <div class="col-lg-6 col-12 form-group">
                            <label>Upload CV (PDF, DOC, DOCX)</label>
                            <input type="file" name="cv" class="form-control-file">
                            @if($teacher->cv)
                                <p>Current CV: <a href="{{ asset('storage/' . $teacher->cv) }}" download>{{ basename($teacher->cv) }}</a></p>
                            @endif
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Update</button>
                            <a href="{{ route('teachers.index') }}" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Back</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
  

@endsection
