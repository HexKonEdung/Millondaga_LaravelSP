<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;



Route::get('/students', [StudentController::class, 'index'])->name('students.index');  // ✅
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show'); // single student

Route::get('/indexpage', function () {
    return redirect()->route('students.index');
});

// Show single student
Route::get('/showpage/{id}', function($id) {
    $students = [
        ['name' => 'unk', 'course' => 'BSIT', 'year_level' => 4],
        ['name' => 'Juan Dela Cruz', 'course' => 'BSIT', 'year_level' => 3],
        ['name' => 'Maria Santos', 'course' => 'BSCS', 'year_level' => 2],
        ['name' => 'Pedro Reyes', 'course' => 'BSIS', 'year_level' => 1],
    ];

    if (!isset($students[$id])) {
        abort(404, "Student not found");
    }

    $student = $students[$id]; // pass only the selected student
    return view('students.show', compact('student'));
});

Route::get('/', function () {
    return view('students.home');
});

Route::get("/homepage", function() {
    return view('students.home');
});

Route::get("/addpage", function() {
    return view('students.create');
});

