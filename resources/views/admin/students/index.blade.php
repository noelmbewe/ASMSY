@extends('layouts.admin')

@section('title', 'Students')

@section('contents')

<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Students</h3>
        <ul>
            <li>
                <a href="{{ route('admin.index') }}">Home</a>
            </li>
            <li>All Students</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <!-- Student Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>All Student Data</h3>
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

            <!-- Success Message -->
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Create New Student Button -->
            <div class="d-flex justify-content-end col-3 mb-4">
                <a href="{{ route('admin.students.create') }}" class="fw-btn-fill btn-gradient-yellow">Create New Student</a>
            </div>

            <form class="mg-b-20">
                <div class="row gutters-8">
                    <div class="col-3-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by ID ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-4 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by Name ..." class="form-control">
                    </div>
                    <div class="col-4-xxxl col-xl-3 col-lg-3 col-12 form-group">
                        <input type="text" placeholder="Search by District ..." class="form-control">
                    </div>
                    <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                        <button type="submit" class="fw-btn-fill btn-gradient-yellow">SEARCH</button>
                    </div>
                </div>
            </form>

            <div class="table-responsive">
                <table class="table display data-table text-nowrap" id="tableExport">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input checkAll">
                                    <label class="form-check-label">ID</label>
                                </div>
                            </th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Gender</th>
                            <th>Home District</th>
                            <th>Admission Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label">#{{ $student->studentID }}</label>
                                </div>
                            </td>
                            <td>{{ $student->firstname }}</td>
                            <td>{{ $student->lastname }}</td>
                            <td>{{ $student->gender }}</td>
                            <td>{{ $student->homeDistrict }}</td>
                            <td>{{ $student->admissionDate }}</td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="flaticon-more-button-of-three-dots"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('admin.students.edit', $student->studentID) }}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        <form action="{{ route('admin.students.destroy', $student->studentID) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this student?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item"><i class="fas fa-times text-orange-red"></i>Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
