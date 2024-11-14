@extends('layouts.admin')

@section('title', 'Edit Parent')

@section('contents')

<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Edit Parent</h3>
        <ul>
            <li>
                <a href="{{ route('admin.index') }}">Home</a>
            </li>
            <li>Edit Parent</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>Edit Parent Details</h3>
                </div>
            </div>

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Parent Edit Form -->
            <form action="{{ route('parents.update', $parent->parentID) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-6 col-12 form-group">
                        <label>First Name *</label>
                        <input type="text" name="firstname" value="{{ old('firstname', $parent->firstname) }}" class="form-control">
                        @error('firstname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Last Name *</label>
                        <input type="text" name="lastname" value="{{ old('lastname', $parent->lastname) }}" class="form-control">
                        @error('lastname')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Email *</label>
                        <input type="email" name="email" value="{{ old('email', $parent->email) }}" class="form-control">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Phone Number *</label>
                        <input type="text" name="phoneNumber" value="{{ old('phoneNumber', $parent->phoneNumber) }}" class="form-control">
                        @error('phoneNumber')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Password *</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter new password">
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Confirm Password *</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm new password">
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Occupation</label>
                        <input type="text" name="occupation" value="{{ old('occupation', $parent->occupation) }}" class="form-control">
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Address</label>
                        <input type="text" name="address" value="{{ old('address', $parent->address) }}" class="form-control">
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                            <option value="Male" {{ $parent->gender == 'Male' ? 'selected' : '' }}>Male</option>
                            <option value="Female" {{ $parent->gender == 'Female' ? 'selected' : '' }}>Female</option>
                        </select>
                    </div>

                    <div class="col-lg-6 col-12 form-group">
                        <label>Religion</label>
                        <input type="text" name="religion" value="{{ old('religion', $parent->religion) }}" class="form-control">
                    </div>

                    <div class="col-lg-4 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">Update Parent</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


@endsection
