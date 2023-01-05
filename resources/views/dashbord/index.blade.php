@extends('dashbord.bagian.utama')
    
@section('main')
    
  <h1>Selamat Datang {{ auth()->user()->name }}</h1>

@endsection
