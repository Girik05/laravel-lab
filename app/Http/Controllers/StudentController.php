<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::orderBy('id')->get();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'roll_no'    => 'required|string|max:20|unique:students,roll_no',
            'name'       => 'required|string|max:100',
            'email'      => 'required|email|max:150|unique:students,email',
            'department' => 'required|string|max:50',
            'semester'   => 'required|integer|between:1,8',
            'cgpa'       => 'nullable|numeric|between:0,10',
        ]);

        Student::create($data);

        return redirect()->route('students.index')->with('status', 'Student saved successfully!');
    }

    // Implicit route model binding: /students/999999 -> 404 automatically
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $data = $request->validate([
            'roll_no'    => 'required|string|max:20|unique:students,roll_no,'.$student->id,
            'name'       => 'required|string|max:100',
            'email'      => 'required|email|max:150|unique:students,email,'.$student->id,
            'department' => 'required|string|max:50',
            'semester'   => 'required|integer|between:1,8',
            'cgpa'       => 'nullable|numeric|between:0,10',
        ]);

        $student->update($data);

        return redirect()->route('students.show', $student)->with('status', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('status', 'Student deleted.');
    }
}
