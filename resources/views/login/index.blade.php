@extends('layout.utama')

@section('main')

   


    <div class="container">
        <div class="row justify-content-center">

              {{-- gagal login --}}
            @if ( session()->has("loginGagal") )
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session("loginGagal") }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                 </div>
            @endif
            
            {{-- berhasil registrasi --}}
            @if ( session()->has("berhasil") )
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session("berhasil") }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="col-md-5 mt-5 p-3 rounded shadow-sm " style="background-color: #ddd" >
                <h1 class="text-center" style="padding-bottom:30px" >Login</h1>

               
               
            
               
                <form action="/login" method="post" >
                    @csrf
                    {{-- gmail --}}
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror " placeholder="Gmail" name="email" id="email" autofocus required autocomplete="off">
                        <label id="email" style="color: gray" >Gmail</label>
                    </div>
                    @error('email')
                        <div class="invalid-feed">
                            <p style="color:red"  class="ms-1" >{{ $message }}</p>
                        </div>
                    @enderror
                    {{-- password --}}
                    <div class="form-floating">
                        <input type="password" class="form-control mt-3 @error('password') is-invalid @enderror " placeholder="Password" name="password" id="password" required >
                        <label id="password" style="color: gray" >Password</label>
                    </div>

                    <div class="d-flex justify-content-center" style="padding-top: 5px">
                        <button type="submit" class="btn btn-success mt-3 fw-bold ">Submit</button>
                    </div>
                </form>
                <p class="ms-1 mt-3 text-center" style="font-size: 15px" >Belum punya akun bisa <a  class="text-decoration-none fw-bold " href="/registrasi" >registrasi</a> dulu</p>
            </div>

        </div>
    </div>


@endsection