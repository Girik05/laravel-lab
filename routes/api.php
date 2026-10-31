<?php

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Activity 6 (E): GET /api/students -> all students as a JSON array
Route::get('/students', function () {
    return response()->json(Student::all());
});
