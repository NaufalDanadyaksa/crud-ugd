@extends('layout.template')
@section('konten')
<div>
    <h2 class="mb-3">Profile</h2>
    <div class="card">
        <div class="card-body d-flex align-items-center">
           
            <img src="{{ session('user.profile_picture') }}"  alt="Profile Picture" class="img-thumbnail me-3">
            <div>
                <p class="card-text"><strong>Name:</strong> {{ session('user.name') }}</p>
                <p class="card-text"><strong>NIM:</strong> {{ session('user.nim') }}</p>
                <p class="card-text"><strong>Jurusan:</strong> {{ session('user.jurusan') }}</p>
            </div> 
        </div>
    </div>
</div>
    <a href="{{ route('logout') }}">logout</a>
@endsection
