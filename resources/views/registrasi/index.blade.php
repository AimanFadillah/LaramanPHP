@extends('layout.utama')

@section('main')

    <div class="container">
        <div class="row justify-content-center">

            <div class="col-lg-5 mt-3 p-3 rounded shadow-sm " style="background-color: #ddd" >
                <h1 class="text-center mt-3" style="padding-bottom:30px" >Registrasi</h1>

                <form action="/registrasi" method="POST" >
                    @csrf

                    <div class="form-floating">
                        <input type="text" class="form-control @error("name") is-invalid @enderror " placeholder="name" name="name" id="name" value="{{ old("name") }}" >
                        <label for="name" style="color:gray;" >Nama</label>
                    </div>
                    @error("name")
                    <div class="invalid-feed">
                        <p class="ms-1" style="color: red" >{{ $message }}</p>
                    </div>
                    @enderror
                    <div class="form-floating">
                        <input type="email" class="form-control mt-3 @error('email') is-invalid @enderror " placeholder="email" name="email" id="email" value="{{ old("email") }}" >
                        <label for="email"  style="color:gray;">Gmail</label>
                    </div>
                    @error("email")
                    <div class="invalid-feed">
                        <p class="ms-1" style="color: red" >{{ $message }}</p>
                    </div>
                    @enderror
                    <div class="form-floating">
                        <input type="password" class="form-control mt-3 @error("password") is-invalid @enderror " placeholder="Password" name="password" id="password" value="{{ old("password") }}" >
                        <label for="password"  style="color:gray;">Password</label>
                    </div>
                    @error("password")
                    <div class="invalid-feed">
                        <p class="ms-1" style="color: red" >{{ $message }}</p>
                    </div>
                    @enderror
                    <div class="d-flex justify-content-center" style="padding-top: 5px">
                        <button type="submit" class="btn btn-success mt-3 fw-bold ">Submit</button>
                    </div>
                </form>

                <p class="ms-1 mt-3 text-center" style="font-size: 15px" >Udah punya akun bisa langsung <a  class="text-decoration-none fw-bold " href="/login" >Login</a> </p>
            </div>

        </div>
    </div>


@endsection