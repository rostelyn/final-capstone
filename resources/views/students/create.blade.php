@extends('layouts.app')

@section('content')
    <h1>Add Student</h1>
    <form method="POST" action="{{ route('student.store') }}">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="section">Section:</label>
            <input type="text" id="section" name="section" required>
        </div>
        <div>
            <label for="course">Course:</label>
            <input type="text" id="course" name="course" required>
        </div>
        <button type="submit">Add Student</button>
    </form>
@endsection
