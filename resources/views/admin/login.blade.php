@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="login-page">
            <div class="logo my-3">
                <img src="{{ asset('painel/img/logo-login.svg') }}" alt="">
            </div>
            <div class="form-login">
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="E-mail:">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" placeholder="Senha:">
                </div>
                <div class="mb-3">
                    <button class="btn btn-login">Entrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
