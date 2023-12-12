@extends('layout.template')
<!-- START FORM -->
@section('konten')
@php
    $jurusan = [
    ['id' => 1, 'nama_jurusan' => 'Teknik Informatika'],
    ['id' => 2, 'nama_jurusan' => 'Teknik Sipil'],
    ['id' => 3, 'nama_jurusan' => 'Teknik Mesin'],
];

@endphp

<form action="{{url("mahasiswa/{$data->id}")}}" method='post' enctype="multipart/form-data">
@csrf
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href="{{url('mahasiswa')}}" class="btn btn-secondary"><- kembali</a>
    <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            {{$data->nim}}
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='name' value="{{$data->name}}" id="name">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <select class="form-select" name="jurusan" id="jurusan">
                @foreach ($jurusan as $j)
                    <option value="{{ $j['nama_jurusan'] }}" {{ $data->j == $j['id'] ? 'selected' : '' }}>
                        {{ $j['nama_jurusan'] }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Profile Picture</label>
        <div class="col-sm-10">
            <input type="file" class="form-control" name='profile_picture' id="profile_picture">
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