@extends('dashbord.bagian.utama')

@section('main')

<h1>Projeck</h1>

<hr>

<div class="col-lg-8">
  <a href="/dashbord/projeck/create" class="btn btn-primary mb-3 ">Tambah</a>

  @if(session()->has('success') )
  <div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif

<table class="table table-striped table-sm  " >
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Judul</th>
      <th scope="col">Kategori</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($projeck as $projecknya)
    <tr>
      <td>{{ $loop->iteration }}</td>
      <td>{{ $projecknya->title }}</td>
      <td>{{ $projecknya->kategori->namaKategori  }}</td>
      <td>
        <a href="/dashbord/projeck/{{ $projecknya->slug }}" class="badge bg-info"><i class="bi bi-eye"></i></a>
        <a href="/dashbord/projeck/{{ $projecknya->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square  "></i></i></a>
        <form action="/dashbord/projeck/{{ $projecknya->slug }}" method="post" class="d-inline" >
          @method('delete')
          @csrf

          <button  class="badge bg-danger border-0" onclick="return confirm('kamu yakin?')" ><i class="bi bi-x-circle"></i></button>
           
        </form>
      </td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>
    
</div>
@endsection

