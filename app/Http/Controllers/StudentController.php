<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    // List all students
    public function index()
{
    $students = Students::all();
    return view('students.index', compact('students')); // ✅ Pass $students to the view
}


    // Show single student
    public function show($id)
{
    $student = Student::findOrFail($id);
    return view('students.show', compact('student')); // ✅ correct variable
}
}

