@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Student</h1>

        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="place_of_birth">Place of Birth</label>
                <input type="text" name="place_of_birth" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="date_of_birth">Date of Birth</label>
                <input type="date" name="date_of_birth" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="class">Class</label>
                <input type="text" name="class" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="major">Major</label>
                <input type="text" name="major" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
