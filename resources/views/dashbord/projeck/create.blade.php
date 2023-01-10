@extends('dashbord.bagian.utama')

@section('main')
    
<h1>Create Projeck</h1>

<hr>

<div class="col-lg-8">

<form action="/dashbord/projeck" method="POST" enctype="multipart/form-data" >
    @csrf
    {{-- title --}}
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror " id="title" name="title" required autofocus value="{{ old('title') }}" >
      @error('title')
        <div class="invalid-feed">
            <p class="text-danger" >{{ $message }}</p>
        </div>
      @enderror
    </div>
    
        {{-- slug --}}
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is-invalid  @enderror " id="slug" name="slug" required value="{{ old('slug') }}" >
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
                @if(old('kategori') == $kategorinya->id)
                    <option value="{{ $kategorinya->id }}" selected >{{ $kategorinya->namaKategori }}</option>
                @else
                <option value="{{ $kategorinya->id }}">{{ $kategorinya->namaKategori }}</option>
            @endif
            @endforeach

          </select>
      </div>

      {{-- img --}}
      <div class="mb-3">
        <label for="img" class="form-label">Upload img</label>
        <img class="img-preview img-fluid  mb-3 col-sm-5 ">

        <input class="form-control @error('img') is-invalid  @enderror " type="file" id="img" name="img" onchange="previewImage()" >
        @error('img')
        <div class="invalid-feed">
            <p class="text-danger" >{{ $message }}</p>
        </div>
      @enderror
      </div>

      {{-- body --}}
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
        <input id="body" type="hidden" name="body" value="{{ old('body') }}" >
        <trix-editor input="body"></trix-editor>
      </div>

    <button type="submit" class="btn btn-primary">Create Projeck</button>



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

    function previewImage () {
    
    const image = document.querySelector("#img");
    const imgPreview = document.querySelector(".img-preview");

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function (oFREvent){
      imgPreview.src = oFREvent.target.result;
    } 
    
    }
</script>

@endsection