@extends('dashbord.bagian.utama')

@section('main')

<div class="container mt-5">

    <div class="row ">

        <div class="col-lg-8">
            
            <h1>{{ $projeck->title }}</h1>
           
            <a href="/dashbord/projeck" class="btn btn-success " style="box-sizing: border-box" ><i class="bi bi-arrow-left"></i> Kembali</a>
            <a href="/dashbord/projeck/{{ $projeck->slug }}/edit" class="btn btn-warning" ><i class="bi bi-pencil-square"></i> Edit</a>
            <form action="/dashbord/projeck/{{ $projeck->slug }}" method="post" class="d-inline" >
                @method('delete')
                @csrf
      
                <button  class="btn btn-danger border-0" onclick="return confirm('kamu yakin?')" ><i class="bi bi-x-circle"> Hapus</i></button>
                 
              </form>

            @if($projeck->img)
              <div style="max-height:350px ;overflow:hidden" >
                <img src="{{ asset('storage/'. $projeck->img  ) }}" class="img-fluid my-3 shadow rounded " alt="{{ $projeck->kategori->namaKategori }}">
            </div>
            @else
            <img src="http://source.unsplash.com/1200x400?{{ $projeck->kategori->namaKategori }}" class="img-fluid my-3 shadow rounded " alt="{{ $projeck->kategori->namaKategori }}">
            @endif

            {!! $projeck->body !!}
        </div>

    </div>

</div>  
    
@endsection
