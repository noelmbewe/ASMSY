@extends('layouts.admin')

@section('title', 'Add Class')

@section('contents')

    <div class="dashboard-content-one">
        <!-- Breadcrumbs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Classes</h3>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>Add New Class</li>
            </ul>
        </div>
        <!-- Breadcrumbs Area End Here -->

        <!-- Add New Class Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Class</h3>
                    </div>
                </div>

                <form class="new-added-form" action="{{ route('classes.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Class Name *</label>
                            <input type="text" name="className" class="form-control" required>
                        </div>
                        
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Assign Teacher</label>
                            <select name="teacherID" class="select2">
                                <option value="">Please Select Teacher</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"> {{ $teacher->first_name }} {{ $teacher->last_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Add New Class Area End Here -->


@endsection
