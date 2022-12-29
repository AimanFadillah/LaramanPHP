

@extends('layout.utama')
   

@section('main')

    <h1 class="mb-4 text-center">{{ $judul }}</h1>

    <div class="container">

        <div class="row justify-content-center ">

            <div class="col-md-10">
                <form action="/projeck" >

                @if ( request("kategori") )
                    <input type="hidden" name="kategori" value="{{ request("kategori") }}" >
                @endif

                @if ( request("user") )
                    <input type="hidden" name="user" value="{{ request("user") }}" >
                @endif

                <div class="input-group mb-4">
                    <input type="text" class="form-control" placeholder="Cari...." name="cari" value="{{ request("cari") }}" autocomplete="off"> 
                    <button class="btn btn-danger" type="Submit" >Cari</button>
                </div>
                </form>
            </div>

        </div>

    </div>


   

    @if ($kumpulan_projeck->count())
    <div class="card mb-3">
        <img src="http://source.unsplash.com/1600x900?{{ $kumpulan_projeck[0]->kategori->namaKategori }}" class="card-img-top" alt="{{ $kumpulan_projeck[0]->kategori->namaKategori }}">
        <div class="card-body text-center">
        <h2 class="card-title"><a class="text-decoration-none text-black" href="/projeck/{{ $kumpulan_projeck[0]->slug }}" >{{ $kumpulan_projeck[0]->title }}<a></h2>
        <h6 class="mb-3">
            <small>by 
                <a class="text-decoration-none" href="/projeck?user={{ $kumpulan_projeck[0]->user->name }}"> 
                    {{ $kumpulan_projeck[0]->user->name }} 
                </a> Kategori <a class="text-decoration-none" href="/projeck?kategori={{  $kumpulan_projeck[0]->kategori->namaKategori  }}">{{ $kumpulan_projeck[0]->kategori->namaKategori }}<a>  {{ $kumpulan_projeck[0]->created_at->diffForHumans() }} </small><h6>
            <p class="fs-6 text-dark">{{ $kumpulan_projeck[0]->excerpt }}</p>
        </div>
    </div>
   

    
    <div class="container">
        
        <div class="row">
            @foreach ($kumpulan_projeck->skip(1) as $projecknya)
            <div class="col-md-4 mb-3">
                <div class="card">
                    

                    <div class="px-2 py-1 position-absolute" style="background-color: rgba(0,0,0,0.5)" ><a class="text-decoration-none text-white" href="projeck?kategori={{ $projecknya->kategori->slug }}">{{ $projecknya->kategori->namaKategori }}</a></div>
                    <img src="http://source.unsplash.com/500x400?{{ $projecknya->kategori->namaKategori }}" class="card-img-top" alt="{{ $projecknya->kategori->namaKategori }}">
                    <div class="card-body">
                        <h5 class="card-title">
                          <a class="text-decoration-none text-black" href="/projeck/{{ $projecknya->slug }}/" > {{ $projecknya->title }} </a>
                        </h5>
                        <small>
                            <h6>by
                                <a class="text-decoration-none" href="/projeck?user={{ $projecknya->user->name }}"> {{ $projecknya->user->name }} </a> 
                                Kategori 
                                <a class="text-decoration-none" href="/projeck?kategori={{  $projecknya->kategori->namaKategori  }}">{{ $projecknya->kategori->namaKategori }}<a>
                            <h6><br>
                        </small>
                      <p class="card-text mb-3">{{ $projecknya->excerpt }}</p>
                      <a href="/projeck/{{ $projecknya->slug }}/" class="btn btn-primary">Baca Lebih</a>
                    </div>

                    
                </div>
            </div>
            @endforeach

            
        </div>
    </div>

    @else 

    <p class="text-center fs-4">Tidak ada Projeck</p>

@endif


<div class="d-flex justify-content-center ">
    {{ $kumpulan_projeck->links() }}
</div>

   

@endsection