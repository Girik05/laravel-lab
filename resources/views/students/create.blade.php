@extends('layouts.app')

@section('title', 'Add Student')

@section('content')
    <h1>Add Student</h1>
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        @include('students._form')
        <button type="submit">Save Student</button>
    </form>
@endsection
