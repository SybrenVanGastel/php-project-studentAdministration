@extends('layouts.template')

@section('title', 'Welcome to the Student Administration')

@section('main')
    <h1 class="mt-3">Course</h1>
    <p>{{ $course['description'] }}</p>
    <p>List of students enrolled:</p>
    <ul>
        @foreach($course['studentcourses'] as $student)
            <li>{{ $student['student']['first_name'] }} {{ $student['student']['last_name'] }} (semester {{ $student['semester'] }})</li>
        @endforeach
    </ul>
@endsection
