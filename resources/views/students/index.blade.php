@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Students List</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('students.create') }}" class="btn btn-primary mb-3">Add Student</a>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Place of Birth</th>
                    <th>Date of Birth</th>
                    <th>Class</th>
                    <th>Major</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                    <tr>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->place_of_birth }}</td>
                        <td>{{ $student->date_of_birth }}</td>
                        <td>{{ $student->class }}</td>
                        <td>{{ $student->major }}</td>
                        <td>
                            @if($student->image_path)
                            <img src="{{ asset('storage/' . $student->image_path) }}" alt="Student Image" width="50">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('students.show', $student->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
