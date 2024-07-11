@extends('layouts.app')

@section('content')
    <h1>{{ $student->name }}</h1>
    <p>Place of Birth: {{ $student->place_of_birth }}</p>
    <p>Date of Birth: {{ $student->date_of_birth }}</p>
    <p>Class: {{ $student->class }}</p>
    <p>Major: {{ $student->major }}</p>
    @if($student->image)
        <p><img src="{{ asset('storage/' . $student->image) }}" alt="{{ $student->name }}" width="100"></p>
    @endif
    <a href="{{ route('students.edit', $student) }}">Edit</a>
    <form action="{{ route('students.destroy', $student) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
