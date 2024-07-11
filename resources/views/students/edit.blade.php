@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit Student</h1>

        <form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $student->name }}" required>
            </div>

            <div class="form-group">
                <label for="place_of_birth">Place of Birth</label>
                <input type="text" name="place_of_birth" class="form-control" value="{{ $student->place_of_birth }}" required>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" value="{{ $student->date_of_birth }}" required>
            </div>

            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" name="class" class="form-control" value="{{ $student->class }}" required>
            </div>

            <div class="form-group">
                <label for="major">Major</label>
                <input type="text" name="major" class="form-control" value="{{ $student->major }}" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                @if($student->image)
                    <div>
                        <img src="{{ asset('storage/' . $student->image) }}" alt="{{ $student->name }}" width="100">
                    </div>
                @endif
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
