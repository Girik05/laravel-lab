@if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<label for="roll_no">Roll No</label>
<input id="roll_no" name="roll_no" value="{{ old('roll_no', $student->roll_no ?? '') }}" required>

<label for="name">Name</label>
<input id="name" name="name" value="{{ old('name', $student->name ?? '') }}" required>

<label for="email">Email</label>
<input id="email" type="email" name="email" value="{{ old('email', $student->email ?? '') }}" required>

<label for="department">Department</label>
<input id="department" name="department" value="{{ old('department', $student->department ?? 'CSE') }}" required>

<label for="semester">Semester</label>
<input id="semester" type="number" min="1" max="8" name="semester" value="{{ old('semester', $student->semester ?? 7) }}" required>

<label for="cgpa">CGPA (optional)</label>
<input id="cgpa" type="number" step="0.01" min="0" max="10" name="cgpa" value="{{ old('cgpa', $student->cgpa ?? '') }}">
