@extends('components.layout')

@section('title', 'View Student')

@section('content')

<h2>Student Details</h2>

<table style="width:50%; border-collapse: collapse; margin-top:20px;">
    <tr>
        <th style="border-bottom:2px solid #ccc; padding:10px;">Name</th>
        <td style="padding:10px;">{{ $student->name }}</td>
    </tr>
    <tr>
        <th style="border-bottom:2px solid #ccc; padding:10px;">Course</th>
        <td style="padding:10px;">{{ $student->course }}</td>
    </tr>
    <tr>
        <th style="border-bottom:2px solid #ccc; padding:10px;">Year Level</th>
        <td style="padding:10px;">{{ $student->year_level }}</td>
    </tr>
</table>

<a href="/indexpage" style="margin-top:20px; display:inline-block;">
    <button style="padding:6px 12px; background-color:#3498db; color:white; border:none; border-radius:4px;">Back</button>
</a>

@endsection
