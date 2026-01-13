{{-- resources/views/components/student-status.blade.php --}}
@props(['student', 'id'])

@php
    $rowStyle = $student['year_level'] > 3 ? 'background-color:#d4edda;' : '';
@endphp


