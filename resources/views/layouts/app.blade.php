<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CST463 Laravel Lab') · Girik Sagar</title>
    <style>
        body { font-family: system-ui, sans-serif; max-width: 860px; margin: 0 auto; padding: 0 16px 40px; color: #1f2937; line-height: 1.6 }
        nav { display: flex; gap: 16px; flex-wrap: wrap; padding: 14px 0; border-bottom: 1px solid #e5e7eb; margin-bottom: 20px }
        nav a { color: #dc2626; text-decoration: none; font-weight: 600 }
        h1 { color: #dc2626 }
        .status { background: #dcfce7; border: 1px solid #86efac; color: #166534; padding: 10px 14px; border-radius: 8px; margin-bottom: 16px }
        .errors { background: #fee2e2; border: 1px solid #fca5a5; color: #991b1b; padding: 10px 14px; border-radius: 8px; margin-bottom: 16px }
        table { width: 100%; border-collapse: collapse }
        th, td { text-align: left; padding: 8px 10px; border-bottom: 1px solid #e5e7eb }
        th { background: #f9fafb }
        label { display: block; margin-top: 12px; font-weight: 600 }
        input, select { width: 100%; max-width: 360px; padding: 6px 8px; border: 1px solid #d1d5db; border-radius: 6px; font: inherit }
        button, .btn { display: inline-block; margin-top: 16px; padding: 8px 16px; background: #dc2626; color: #fff; border: 0; border-radius: 6px; text-decoration: none; cursor: pointer; font: inherit }
        footer { margin-top: 40px; color: #6b7280; font-size: 13px }
    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ route('students.index') }}">Students</a>
        <a href="{{ route('students.create') }}">Add Student</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ url('/api/students') }}">API</a>
    </nav>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    @yield('content')

    <footer>Girik Sagar · Roll 31 · NSS23CS031 · CST463 Activity 6</footer>
</body>
</html>
