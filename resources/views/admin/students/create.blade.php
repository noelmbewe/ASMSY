 @extends('layouts.admin')

@section('title', 'Add Student')

@section('contents')
<div class="dashboard-content-one">
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Students</h3>
        <ul>
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>Student Admit Form</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <!-- Admit Form Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Add New Students</h3>
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
            
            <form class="new-added-form" action="{{ route('admin.students.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <!-- First Name -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" name="firstname" placeholder="" class="form-control" required>
                    </div>
                    
                    <!-- Last Name -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" name="lastname" placeholder="" class="form-control" required>
                    </div>
                    
                    <!-- Gender -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Gender *</label>
                        <select name="gender" class="select2 form-control">
                            <option value="">Please Select Gender *</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                    </div>
                    
                    <!-- Date Of Birth -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Date Of Birth *</label>
                        <input type="text" name="DOB"  class="form-control air-datepicker" >
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    
                    <!-- Parent Selection -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Select Parent *</label>
                        <select name="parentID" class="select2 form-control" required>
                            <option value="">Please Select Parent *</option>
                            @foreach($parents as $parent)
                                <option value="{{ $parent->parentID }}">{{ $parent->firstname }} {{ $parent->lastname }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Class -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                    <label for="classID">Select Class</label>
                    <select name="classID" class="form-control">
                        @foreach($classes as $class)
                            <option value="{{ $class->classID }}">{{ $class->className }}</option>
                        @endforeach
                    </select>
                    </div>

                  

                    <!-- Admission Date -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Admission Date</label>
                        <input type="text" name="admissionDate" class="form-control air-datepicker">
                        <i class="far fa-calendar-alt"></i>
                    </div>

                    <!-- Home District -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Home District</label>
                        <input type="text" name="homeDistrict" class="form-control" placeholder="Enter district">
                    </div>

                    <!-- Area -->
                    <div class="col-xl-3 col-lg-6 col-12 form-group">
                        <label>Area</label>
                        <input type="text" name="area" class="form-control" placeholder="Enter area">
                    </div>

                    <!-- Upload Student Photo -->
                    <div class="col-lg-6 col-12 form-group mg-t-30">
                        <label class="text-dark-medium">Upload Student Photo (150px X 150px)</label>
                        <input type="file" name="photo" class="form-control-file">
                    </div>

                    <!-- Submit and Reset Buttons -->
                    <div class="col-12 form-group mg-t-8">
                        <button type="submit" name="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                        <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Admit Form Area End Here -->

@endsection
