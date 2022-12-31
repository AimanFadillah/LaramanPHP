@extends('layout.utama')

@section('main')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-5 mt-5 p-3 rounded shadow-sm " style="background-color: #ddd" >
                <h1 class="text-center" style="padding-bottom:30px" >Login</h1>

                @if ( session()->has("berhasil") )
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session("berhasil") }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
               
                <form>
                    <input type="email" class="form-control" placeholder="Gmail" name="gmail" >
                    <input type="password" class="form-control mt-3 " placeholder="Password" name="password" >
                    <div class="d-flex justify-content-center" style="padding-top: 5px">
                        <button type="submit" class="btn btn-success mt-3 fw-bold ">Submit</button>
                    </div>
                </form>
                <p class="ms-1 mt-3 text-center" style="font-size: 15px" >Belum punya akun bisa <a  class="text-decoration-none fw-bold " href="/registrasi" >registrasi</a> dulu</p>
            </div>

        </div>
    </div>


@endsection