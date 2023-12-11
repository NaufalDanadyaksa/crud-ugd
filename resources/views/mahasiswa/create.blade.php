@extends('layout.template')
<!-- START FORM -->
@section('konten')


<form action='{{url('mahasiswa')}}' method='post'>
@csrf
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="{{route('mahasiswa')}}" class="btn btn-secondary"><-kembali</a>
    <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="number" class="form-control" name='nim' value="{{Session::get('nim')}}" id="nim">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='name' value="{{Session::get('nama')}}" id="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-select" name="jurusan" id="jurusan">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name='email' value="{{Session::get('email')}}" id="email">
        </div>
    </div>
    <divpassword class="mb-3 row">
        <label for="password" class="col-sm-2 col-form-label">password</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='password' value="{{Session::get('password')}}" id="password">
        </div>
    </divpassword>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-select" name="type" id="type">
                <option value="1">Admin</option>
                <option value="2">User</option>
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>

</div>
</form>
<!-- AKHIR FORM -->
    
@endsection