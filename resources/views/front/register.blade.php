@extends('layouts.main')
@section('content')
    <div class="cadastro">
        <div class="container">
            <div class="cadastro-grid">
                <div>
                    <h2>Vamos fazer<br> <span> Seu cadastro :)</span></h2>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="" placeholder="E-mail">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="Nome e sobrenome">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="CPF">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="Telefone">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Este número é Whatsapp
                        </label>
                    </div>
                </div>
                <div>
                    <h2>Crie um nome de<br> <span> usuário e senha :)</span></h2>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="" placeholder="Usuário">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="" placeholder="Senha">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="" placeholder="Confirmar senha">
                    </div>

                </div>
                <div>
                    <div class="row">
                        <h2 class="ps-3">Agora só falta seu<br> <span> endereço :)</span></h2>
                        <div class="mb-3 col-md-6">
                            <input type="email" class="form-control" id="" placeholder="Cep">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="" placeholder="Endereço">
                        </div>
                        <div class="mb-3 col-md-4">
                            <input type="text" class="form-control" id="" placeholder="Numero">
                        </div>
                        <div class="mb-3 col-md-8">
                            <input type="text" class="form-control" id="" placeholder="Complemento">
                        </div>
                        <div class="mb-3 col-md-12">
                            <input type="text" class="form-control" id="" placeholder="Bairro">
                        </div>
                        <div class="mb-3 col-md-12">
                            <input type="text" class="form-control" id="" placeholder="Cidade">
                        </div>
                        <div class="mb-3 col-md-3">
                            <input type="text" class="form-control" id="" placeholder="UF">
                        </div>
                        <div class="mb-3 col-md-9">
                            <button class="btn btn-two" style="width: 100%">Cadastrar</button>
                        </div>
                        <div class="form-check col-md-12 check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Aceito os termos e condições
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="testimonials">
        <div class="container">
            <div class="grid-testimonials">
                <div class="left">
                    <div class="text-testimonials">
                        <h2>Como<br> <span>funciona?</span></h2>
                        <p>Faça seu cadastro e<br> ganhe 5 lances bônus<br> para começar</p>
                        <button class="btn btn-two">Cadastre-se</button>
                    </div>
                    <div>
                        <img src="{{ asset('front/img/mulher.png') }}" alt="">
                    </div>
                </div>
                <div>
                    <div class="video">
                        <div class="play">
                            <img src="{{ asset('front/img/Vector.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fillet">
        <div class="container">
            <div class="fillet-grid">
                <div class="block-fillet">
                    <div>
                        <img src="{{ asset('front/img/check.svg') }}" alt="">
                    </div>
                    <div>
                        <p>Faça seu cadastro</p>
                    </div>
                </div>
                <div class="block-fillet">
                    <div>
                        <img src="{{ asset('front/img/check.svg') }}" alt="">
                    </div>
                    <div>
                        <p>Compre pacote de lances</p>
                    </div>
                </div>
                <div class="block-fillet">
                    <div>
                        <img src="{{ asset('front/img/check.svg') }}" alt="">
                    </div>
                    <div>
                        <p>Participe dos leilões</p>
                    </div>
                </div>
                <div class="block-fillet">
                    <div>
                        <img src="{{ asset('front/img/check.svg') }}" alt="">
                    </div>
                    <div>
                        <p>Divirta-se</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('front.partials.provider-desktop')
    @include('front.partials.provider-mobile')
@endsection
