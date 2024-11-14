@extends('layouts.admin')

@section('title', 'Add Parent')

@section('contents')

    <div class="dashboard-content-one">
        <!-- Breadcrumbs Area Start Here -->
        <div class="breadcrumbs-area">
            <h3>Parent</h3>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>Add New Parent</li>
            </ul>
        </div>
        <!-- Breadcrumbs Area End Here -->

        <!-- Add New Parent Area Start Here -->
        <div class="card height-auto">
            <div class="card-body">
                <div class="heading-layout1">
                    <div class="item-title">
                        <h3>Add New Parent</h3>
                    </div>
                </div>

                <form class="new-added-form" action="{{ route('parents.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>First Name *</label>
                            <input type="text" name="firstname" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Last Name *</label>
                            <input type="text" name="lastname" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Username *</label>
                            <input type="text" name="username" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Phone Number *</label>
                            <input type="text" name="phoneNumber" class="form-control" required>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Gender *</label>
                            <select name="gender" class="select2">
                                <option value="">Please Select Gender *</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Occupation</label>
                            <input type="text" name="occupation" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Religion</label>
                            <input type="text" name="religion" class="form-control">
                        </div>
                        <div class="col-xl-3 col-lg-6 col-12 form-group">
                            <label>Password *</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="col-12 form-group mg-t-8">
                            <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">Save</button>
                            <button type="reset" class="btn-fill-lg bg-blue-dark btn-hover-yellow">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
  

@endsection
