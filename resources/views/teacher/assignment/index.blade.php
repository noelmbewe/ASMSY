@extends('layouts.teacher')

@section('title', 'Manage Assignments')

@section('contents')
<div class="dashboard-content-one">
    <!-- Breadcrumbs Area Start Here -->
    <div class="breadcrumbs-area">
        <h3>Assignments</h3>
        <ul>
            <li>
                <a href="{{ route('teacher.index') }}">Home</a>
            </li>
            <li>All Assignments</li>
        </ul>
    </div>
    <!-- Breadcrumbs Area End Here -->

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Assignment Table Area Start Here -->
    <div class="card height-auto">
        <div class="card-body">
            <!-- Create New Assignment Button -->
            <div class="d-flex justify-content-end col-3 mb-4">
                <a href="{{ route('teacher.assignment.create') }}" class="fw-btn-fill btn-gradient-yellow">Create New Assignment</a>
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
                        <input type="text" placeholder="Search by Phone ..." class="form-control">
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
                            <th>Title</th>
                            <th>Class</th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Total Marks</th>
                            <th>Due Date</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($assignments as $assignment)
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input">
                                    <label class="form-check-label">#{{ $assignment->assignmentID }}</label>
                                </div>
                            </td>
                            <td>{{ $assignment->title }}</td>
                            <td>{{ $assignment->class->className ?? 'N/A' }}</td>
                           <td>{{ $assignment->subject->subject_name ?? 'N/A' }}</td>


                            
                            
                            <!-- Display Description -->
                            <td>{{ $assignment->description }}</td>

                            <td>{{ $assignment->totalMarks }}</td>
                            <td>{{ $assignment->dueDate }}</td>
                            <td>
                                @if($assignment->status)
                                    <span class="badge badge-pill badge-success d-block mg-t-8">Graded</span>
                                @else
                                    <span class="badge badge-pill badge-danger d-block mg-t-8">Not Graded</span>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="flaticon-more-button-of-three-dots"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{ route('teacher.assignment.edit', $assignment->assignmentID) }}"><i class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                        
                                        <form action="{{ route('teacher.assignment.destroy', $assignment->assignmentID) }}" method="POST" onsubmit="return confirm('Delete this assignment?');">
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
