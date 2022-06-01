@extends('layouts.main')
@section('content')
    <div class="cadastro">
        <div class="container">
            <div class="cadastro-grid">
                <div>
                    <h2>Vamos fazer<br> <span> Seu cadastro :)</span></h2>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="Nome e sobrenome">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="cpf">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="telefone">
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
                    <h2>Agora só falta seu<br> <span> endereço :)</span></h2>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="" placeholder="name@example.com">
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
    <div class="providers">
        <div class="container">
            <div class="providers-grid">
                <div>
                    <h4>Nossos<br> <span>fornecedores</span> </h4>
                </div>
                <div class="grid-logo">
                    <div class="logos">
                        <img src="{{ asset('front/img/magazine-luiza.svg') }}" alt="">
                    </div>
                    <div class="logos">
                        <img src="{{ asset('front/img/casas-bahia.svg') }}" alt="">
                    </div>
                    <div class="logos">
                        <img src="{{ asset('front/img/ponto-frio.svg') }}" alt="">
                    </div>
                    <div class="logos">
                        <img src="{{ asset('front/img/amazon.svg') }}" alt="">
                    </div>
                    <div class="logos">
                        <img src="{{ asset('front/img/aliexpress.svg') }}" alt="">
                    </div>
                    <div class="logos">
                        <img src="{{ asset('front/img/shoppe.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
