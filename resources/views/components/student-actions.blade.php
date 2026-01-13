{{-- resources/views/components/student-actions.blade.php --}}
@props(['id'])

<div style="display:flex; gap:8px;">

    {{-- View button --}}
    <a href="/showpage/{{ $id }}">
        <button style="padding:4px 8px; background-color:#2ecc71; color:white; border:none; border-radius:3px; cursor:pointer;">
            View
        </button>
    </a>

    {{-- Edit button --}}
    <a href="/editstudent/{{ $id }}">
        <button style="padding:4px 8px; background-color:#f39c12; color:white; border:none; border-radius:3px; cursor:pointer;">
            Edit
        </button>
    </a>

    {{-- Delete button --}}
    <form action="/deletestudent/{{ $id }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" style="padding:4px 8px; background-color:#e74c3c; color:white; border:none; border-radius:3px; cursor:pointer;">
            Delete
        </button>
    </form>

</div>
