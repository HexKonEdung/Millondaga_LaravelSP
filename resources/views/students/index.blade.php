@extends('components.layout')

@section('title', 'Student List')

@section('content')

<div style="display:flex; align-items:center; justify-content:space-between; margin-bottom:20px;">
    <h1>Student List</h1>
    <a href="">
        <button style="
            padding:8px 14px;
            background-color:#3498db;
            color:white;
            border:none;
            border-radius:4px;
            cursor:pointer;
        ">Add Student</button>
    </a>
</div>

<table style="width:100%; border-collapse: collapse; font-family: Arial, sans-serif;">
    <thead>
        <tr>
            <th style="border-bottom:2px solid #ccc; padding:10px;">Name</th>
            <th style="border-bottom:2px solid #ccc; padding:10px;">Course</th>
            <th style="border-bottom:2px solid #ccc; padding:10px;">Year Level</th>
            <th style="border-bottom:2px solid #ccc; padding:10px;">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <td style="padding:10px;">{{ $student->name }}</td>
            <td style="padding:10px;">{{ $student->course }}</td>
            <td style="padding:10px;">{{ $student->year_level }}</td>
            <td style="padding:10px;">
                {{-- Reusable action buttons component --}}
                <x-student-actions :id="$student->id" />
                <x-student-status :student="$student" />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
