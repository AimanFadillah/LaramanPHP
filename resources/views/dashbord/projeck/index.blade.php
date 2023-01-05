@extends('dashbord.bagian.utama')

@section('main')

<h1>Projeck</h1>

<div class="col-lg-8">
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
        <a href="#" class="badge bg-warning"><i class="bi bi-pencil-square"></i></i></a>
        <a href="#" class="badge bg-danger"><i class="bi bi-x-circle"></i></a>
      </td>
    </tr>
    @endforeach
    
    
  </tbody>
</table>
    
</div>
@endsection