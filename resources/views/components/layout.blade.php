<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Dynamic page title --}}
    <title>@yield('title', 'Platform')</title>

    {{-- Simple CSS for layout --}}
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 20px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        nav {
            display: flex;
            gap: 15px;
        }

        nav a {
            text-decoration: none;
        }

        nav button {
            padding: 8px 14px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: white;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        nav button:hover {
            background-color: #2980b9;
        }

        main {
            padding: 30px 40px;
        }

        .page-title {
            font-size: 20px;
            margin-bottom: 20px;
            color: #333;
        }

        /* Simple icon placeholder */
        .icon {
            width: 16px;
            height: 16px;
            background-color: white;
            border-radius: 50%;
            display: inline-block;
        }
    </style>
</head>
<body>

    {{-- Header with website name and nav --}}
    <header>
        <h1>Student Portal</h1>

        <nav>
            <a href="/homepage">
                <button><span class="icon"></span> Home</button>
            </a>
            <a href="/indexpage">
                <button><span class="icon"></span> Students</button>
            </a>
            <a href="/students/add">
                <button><span class="icon"></span> Add</button>
            </a>
        </nav>
    </header>

    {{-- Page title --}}
    @hasSection('title')
        <div class="page-title">@yield('title')</div>
    @endif

    {{-- Page content --}}
    <main>
        @yield('content')
    </main>

</body>
</html>