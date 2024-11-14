@extends('layouts.admin')

@section('title', 'All Classes')

@section('contents')

<!-- Sidebar Area End Here -->
<div class="dashboard-content-one">
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Classes</h3>
        <ul>
            <li>
                <a href="{{ route('admin.index') }}">Home</a>
            </li>
            <li>All Classes</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <!-- Class Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>All Classes Data</h3>
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

            <!-- Create New Class Button -->
            <div class="d-flex justify-content-end col-3 mb-4">
                <a href="{{ route('classes.create') }}" class="fw-btn-fill btn-gradient-yellow">Create New Class</a>
            </div>

            <!-- Class Table -->
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
                            <th>Class Name</th>
                            <th>Teacher</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($classes as $class)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label">#{{ $class->id }}</label>
                                </div>
                            </td>
                            <td>{{ $class->className }}</td>
                            <td>{{ $class->teacher ? $class->teacher->first_name . ' ' . $class->teacher->last_name : 'No teacher assigned' }}</td>
                            

                            <td>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="flaticon-more-button-of-three-dots"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="{{ route('classes.edit', $class->classID) }}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>

                                        <form action="{{ route('classes.destroy', $class->classID) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this class?');">
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
