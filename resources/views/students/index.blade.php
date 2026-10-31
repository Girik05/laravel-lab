@extends('layouts.app')

@section('title', 'Students')

@section('content')
    <h1>Students</h1>
    <a class="btn" href="{{ route('students.create') }}">+ Add Student</a>

    <table style="margin-top:16px">
        <thead>
            <tr>
                <th>ID</th>
                <th>Roll No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Department</th>
                <th>Semester</th>
                <th>CGPA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->roll_no }}</td>
                    <td><a href="{{ route('students.show', $student) }}">{{ $student->name }}</a></td>
                    <td>{{ $student->email }}</td>
                    <td>{{ $student->department }}</td>
                    <td>{{ $student->semester }}</td>
                    <td>{{ $student->cgpa ?? '—' }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
