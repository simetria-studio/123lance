@extends('layouts.main')
@section('content')
    <div class="produto-lance">
        <div class="container">
            <div class="lance-grid">
                <div class="section-1">
                    <div class="img-product">
                        <img src="{{ asset('front/img/playstation.png') }}" alt="">
                    </div>
                    <div class="product-name">
                        <h4>Console PlayStation 5 Controle Dual Sense PS5 Branco e Preto</h4>
                    </div>
                    <div class="modal-info">
                        <h5>+ informações</h5>
                    </div>
                    <div class="price">
                        <div>
                            <h5>Valor de Mercado </h5>
                            <h2>R$ 25.000,00</h2>
                        </div>
                        <div>
                            <p>O Valor de mercado equivale ao preço do produto em lojas de varejo</p>
                        </div>
                    </div>
                </div>
                <div class="section-2">
                    <div class="node-1">
                        <h4><span><img src="{{ asset('front/img/martelo-2.svg') }}" alt=""></span>Leilão <span
                                class="color-primary">em
                                andamento</span>
                        </h4>
                    </div>
                    <div>
                        <div class="node-2">
                            <h6>Lances ofertados</h6>
                        </div>
                        <div class="node-2">
                            <h6>10.0000</h6>
                        </div>
                        <div class="node-2">
                            <h6>Preço Final</h6>
                        </div>
                        <div class="node-2">
                            <h6>R$ 1000,00</h6>
                        </div>
                        <div class="node-2">
                            <h6>Economia de </h6>
                        </div>
                        <div class="node-2">
                            <h6>R$ 24.0000 </h6>
                        </div>
                        <div class="node-3">
                            <p>Usuário</p>
                            <p><span>lcvpaim</span></p>
                        </div>
                    </div>
                </div>
                <div class="section-2">
                    <div class="node-1">
                        <h4><span><img src="{{ asset('front/img/martelo.svg') }}" alt=""></span>Últimos lances</span>
                        </h4>
                    </div>
                    <div>
                        <div class="node-4">
                            <div>
                                <h6>Usuário</h6>
                            </div>
                            <div>
                                <h6>Lance</h6>
                            </div>
                        </div>
                        <div class="node-4">
                            <div>
                                <h6>Usuário</h6>
                            </div>
                            <div>
                                <h6>R$ 11,85</h6>
                            </div>
                        </div>
                        <div class="node-4">
                            <div>
                                <h6>Usuário</h6>
                            </div>
                            <div>
                                <h6>R$ 11,85</h6>
                            </div>
                        </div>
                        <div class="node-4">
                            <div>
                                <h6>Usuário</h6>
                            </div>
                            <div>
                                <h6>R$ 11,85</h6>
                            </div>
                        </div>
                        <div class="node-4">
                            <div>
                                <h6>Usuário</h6>
                            </div>
                            <div>
                                <h6>R$ 11,85</h6>
                            </div>
                        </div>
                        <div class="node-4">
                            <div>
                                <h6>Usuário</h6>
                            </div>
                            <div>
                                <h6>R$ 11,85</h6>
                            </div>
                        </div>
                        <div class="node-4">
                            <div>
                                <h6>Usuário</h6>
                            </div>
                            <div>
                                <h6>R$ 11,85</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-3">
                    <div>
                        <div>
                            <button class="btn btn-two">Faça seu lance</button>

                                <h4><span>1</span><span>5</span></h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="filters lance">
        <div class="container">
            <div class="filter-grid">
                <div>
                    <a href="">Leilões Online</a>
                    <a href="">Próximos leilões</a>
                    <a href="">Leilões Arrematados</a>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="all">
                        <a href=""><span><i class="fa-solid fa-arrow-right-long"></i></span> ver todos</a>
                    </div>
                    <div class="navigation">
                        <a href=""><i class="fa-solid fa-angle-left"></i></a>
                        <a href=""><i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="container">
            <div class="product-grid">
                <div class="product-body">
                    <div class="product-header">
                        <div>
                            <h5><span><i class="fa-solid fa-calendar"></i></span> 12/05/2022</h5>
                        </div>
                        <div>
                            <h5><span><i class="fa-solid fa-clock"></i></span> 13:05:00</h5>
                        </div>
                    </div>
                    <div class="product-img">
                        <img src="{{ asset('front/img/playstation.png') }}" alt="">
                    </div>
                    <div class="product-desc">
                        <p>Console PlayStation 5 Controle Dual Sense PS5 Branco e Preto</p>
                        <p>Luis Carlos 2022</p>
                        <h3>R$ 0,17</h3>
                    </div>
                    <div class="product-footer">
                        <div>
                            <button class="btn btn-two">Faça seu lance</button>
                        </div>
                        <div>
                            <h4><span>1</span><span>5</span></h4>
                        </div>
                    </div>
                </div>
                <div class="product-body">
                    <div class="product-header">
                        <div>
                            <h5><span><i class="fa-solid fa-calendar"></i></span> 12/05/2022</h5>
                        </div>
                        <div>
                            <h5><span><i class="fa-solid fa-clock"></i></span> 13:05:00</h5>
                        </div>
                    </div>
                    <div class="product-img">
                        <img src="{{ asset('front/img/playstation.png') }}" alt="">
                    </div>
                    <div class="product-desc">
                        <p>Console PlayStation 5 Controle Dual Sense PS5 Branco e Preto</p>
                        <p>Luis Carlos 2022</p>
                        <h3>R$ 0,17</h3>
                    </div>
                    <div class="product-footer">
                        <div>
                            <button class="btn btn-two">Faça seu lance</button>
                        </div>
                        <div>
                            <h4><span>1</span><span>5</span></h4>
                        </div>
                    </div>
                </div>
                <div class="product-body">
                    <div class="product-header">
                        <div>
                            <h5><span><i class="fa-solid fa-calendar"></i></span> 12/05/2022</h5>
                        </div>
                        <div>
                            <h5><span><i class="fa-solid fa-clock"></i></span> 13:05:00</h5>
                        </div>
                    </div>
                    <div class="product-img">
                        <img src="{{ asset('front/img/playstation.png') }}" alt="">
                    </div>
                    <div class="product-desc">
                        <p>Console PlayStation 5 Controle Dual Sense PS5 Branco e Preto</p>
                        <p>Luis Carlos 2022</p>
                        <h3>R$ 0,17</h3>
                    </div>
                    <div class="product-footer">
                        <div>
                            <button class="btn btn-two">Faça seu lance</button>
                        </div>
                        <div>
                            <h4><span>1</span><span>5</span></h4>
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
