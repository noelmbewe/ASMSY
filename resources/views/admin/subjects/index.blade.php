@extends('layouts.admin')

@section('title', 'Subjects')

@section('contents')

<div class="dashboard-content-one">
    <div class="breadcrumbs-area">
        <h3>Subjects</h3>
        <ul>
            <li>
                <a href="{{ route('admin.index') }}">Home</a>
            </li>
            <li>All Subjects</li>
        </ul>
    </div>

    <div class="card height-auto">
        <div class="card-body">
            <div class="heading-layout1">
                <div class="item-title">
                    <h3>All Subjects</h3>
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

            <div class="d-flex justify-content-end col-3 mb-4">
                <a href="{{ route('subjects.create') }}" class="fw-btn-fill btn-gradient-yellow">Create New Subject</a>
            </div>

            <table class="table display data-table text-nowrap" id="tableExport">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Subject Name</th>
                        <th>Subject Type</th>
                        <th>Date Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subjects as $subject)
                    <tr>
                        <td>{{ $subject->subjectID }}</td>
                        <td>{{ $subject->subject_name }}</td>
                        <td>{{ $subject->subject_type }}</td>
                        <td>{{ $subject->date }}</td>
                        <td>
                            <a href="{{ route('subjects.edit', $subject->subjectID) }}" class="btn btn-info">Edit</a>
                            <form action="{{ route('subjects.destroy', $subject->subjectID) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
