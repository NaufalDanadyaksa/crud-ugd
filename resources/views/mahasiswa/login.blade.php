@extends('layout.auth-layout')
@section('pageTitle', isset($pageTitle) ? $pageTitle : 'Login')
@section('content')
<div class="page page-center">
    <div class="container container-tight py-4">
        <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="./static/Universitas.png" height="200" alt=""></a>
            <h1>Universitas Gajah Duduk</h1>
        </div>
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Login to your account</h2>
                @livewire('login-form' )
                
            </div>

           
        </div>
    </div>
    @endsection