@extends('layout.utama')

@section('main')

<div class="container">

    <div class="row justify-content-center ">

        <div class="col-md-8">
            
            <h1>{{ $projeck->title }}</h1>
            <h6>by 
                <a href="/projeck?user={{ $projeck->user->name }}" > {{ $projeck->user->name }} </a> kategori 
                <a href="/projeck?kategori={{ $projeck->kategori->namaKategori }}">{{ $projeck->kategori->namaKategori }}</a>
            </h6>

            <img src="http://source.unsplash.com/1200x400?{{ $projeck->kategori->namaKategori }}" class="img-fluid my-3 shadow rounded " alt="{{ $projeck->kategori->namaKategori }}">

            {!! $projeck->body !!}
        </div>

    </div>

</div>


@endsection