@extends('dashbord.bagian.utama')

@section('main')

<div class="container mt-5">

    <div class="row ">

        <div class="col-lg-8">
            
            <h1>{{ $projeck->title }}</h1>
           
            <a href="/dashbord/projeck" class="btn btn-success " style="box-sizing: border-box" ><i class="bi bi-arrow-left"></i> Kembali</a>
            <a href="" class="btn btn-warning" ><i class="bi bi-pencil-square"></i> Edit</a>
            <a href="" class="btn btn-danger" ><i class="bi bi-trash"></i> Hapus</a>

            <img src="http://source.unsplash.com/1200x400?{{ $projeck->kategori->namaKategori }}" class="img-fluid my-3 shadow rounded " alt="{{ $projeck->kategori->namaKategori }}">

            {!! $projeck->body !!}
        </div>

    </div>

</div>  
    
@endsection