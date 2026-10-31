@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>About {{ $name }}</h1>
    <p>This page is served by <code>PageController@about</code>.</p>
    <table>
        <tr><th>Name</th><td>{{ $name }}</td></tr>
        <tr><th>Roll No</th><td>Roll {{ $roll }}</td></tr>
        <tr><th>Reg No</th><td>{{ $regNo }}</td></tr>
        <tr><th>Course</th><td>CST463 Web Programming, Activity 6</td></tr>
    </table>
@endsection
