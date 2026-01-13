@extends('components.layout')

{{-- Pass page title to parent layout --}}
@section('title', 'Home')

{{-- Main content section --}}
@section('content')

   <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 30px;">
    {{-- Simple graphic/icon --}}
    <div style="
        width: 60px;
        height: 60px;
        background-color: #3498db;
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 28px;
        font-weight: bold;
    ">
        S
    </div>

    {{-- Text block --}}
    <div>
        <h1 style="margin: 0; font-size: 28px; color: #2c3e50;">
            Welcome to the Student Portal
        </h1>
        <p style="margin-top: 8px; font-size: 16px; color: #555;">
            The Student Portal is your one-stop platform to manage student information, view academic records, and access essential resources. It provides an easy-to-use interface to track students, add new records, and keep everything organized in a secure and efficient way.
        </p>

    </div>
</div>

    

@endsection