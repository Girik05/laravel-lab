@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <h1>Hello, {{ $name }}</h1>
    <p>This name came from the URL: <code>/hello/{{ $name }}</code></p>
@endsection
