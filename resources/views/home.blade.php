@extends('layouts.navbar')

@section('content')
    <h1>Hello World</h1>

    <form action="/logout" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
@endsection