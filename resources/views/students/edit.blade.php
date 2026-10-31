@extends('layouts.app')

@section('title', 'Edit Student')

@section('content')
    <h1>Edit {{ $student->name }}</h1>
    <form method="POST" action="{{ route('students.update', $student) }}">
        @csrf
        @method('PUT')
        @include('students._form')
        <button type="submit">Update Student</button>
    </form>
@endsection
