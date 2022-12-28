@extends('layout.utama')

@section('main')
    <h1>Kumpulan User User</h1>

    @foreach ($user as $usernya)
    <a href="/user/{{ $usernya->name }}" style="text-decoration: none" >
        <hr>
        <h2 >{{ $usernya->name }}</h2>
    </a>
    @endforeach
    <hr>
@endsection