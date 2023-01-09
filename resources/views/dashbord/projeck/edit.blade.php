@extends('dashbord.bagian.utama')

@section('main')
    
<h1>Edit Projeck  {{ $projeck->title }}</h1>

<hr>

<div class="col-lg-8">

<form action="/dashbord/projeck/{{ $projeck->slug }}" method="POST" >
    @method('put')
    @csrf
    {{-- title --}}
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" required autofocus value="{{ old('title',$projeck->title) }}" >
      @error('title')
        <div class="invalid-feed">
            <p class="text-danger" >{{ $message }}</p>
        </div>
      @enderror
    </div>
    
        {{-- slug --}}
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid  @enderror " id="slug" name="slug" required value="{{ old('slug',$projeck->slug) }}" >
        @error('slug')
        <div class="invalid-feed">
            <p class="text-danger" >{{ $message }}</p>
        </div>
      @enderror
      </div>

      {{-- kategori --}}
      <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" name="kategori_id">
           @foreach($kategori as $kategorinya)
                @if(old('kategori',$projeck->kategori_id) == $kategorinya->id)
                    <option value="{{ $kategorinya->id }}" selected >{{ $kategorinya->namaKategori }}</option>
                @else
                <option value="{{ $kategorinya->id }}">{{ $kategorinya->namaKategori }}</option>
            @endif
            @endforeach

          </select>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
        <p class="text-danger" >{{ $message }}</p>
        @enderror
         @error('user')
        <p class="text-danger" >{{ $message }}</p>
        @enderror
        @error('slug')
        <p class="text-danger" >{{ $message }}</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body',$projeck->body) }}" >
        <trix-editor input="body"></trix-editor>
      </div>

    <button type="submit" class="btn btn-primary">Update Projeck</button>
  </form>

</div>

<script>
    // const title = document.querySelector('#title');
    // const slug = document.querySelector("#slug");

    // title.addEventListener('change',function () {
    //     fetch('/dashbord/projeck/checkSlug?title=' + title.value)
    //     .then(response => response.json())
    //     .then(data => slug.value = data.slug )
    // } );
    
    // yang atas gk jalan 

    const title = document.querySelector("#title");
        const slug = document.querySelector("#slug");

        title.addEventListener("keyup", function() {
            let preslug = title.value;
            preslug = preslug.replace(/ /g,"-");
            slug.value = preslug.toLowerCase();
        });

    document.addEventListener('trix-file-accept',function(e){
        e.preventDefault()
    })
    
</script>

@endsection