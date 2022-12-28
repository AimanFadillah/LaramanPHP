@extends('layout.utama')

@section('main')
    <h1 class="ms-2" >Kategori</h1><br>

    <div class="container">

        <div class="row">
            @foreach ($kategori as $kategorinya)
            <div class="col-md-4 mb-3">

                <div class="card text-bg-dark">
                <img src="http://source.unsplash.com/500x400?{{ $kategorinya->namaKategori }}" class="card-img-top" alt="{{ $kategorinya->namaKategori }}">
                    <div class="card-img-overlay d-flex align-items-center justify-content-center p-0 flex-">
                      <h5 class="card-title flex-fill text-center" style="background-color: rgba(0,0,0,0.5)" >
                          <a href="/projeck?kategori={{ $kategorinya->slug }}" class="text-decoration-none text-white">
                            {{ $kategorinya->namaKategori }}
                          </a>
                     </h5>
                    </div>
                  </div>

            </div>
            @endforeach
        </div>

    </div>

@endsection