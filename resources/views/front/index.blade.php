@extends('layouts.main')
@section('content')
    <div class="hero">
        <div class="container">
            <div class="hero-grid">
                <div>

                </div>
                <div class="text-hero">
                    <div>
                        <h1>Ofertas<br> incríves<br> em todo<br> nosso site</h1>
                    </div>
                    <div>
                        <button class="btn btn-one">cadastre-se</button>
                    </div>
                </div>
            </div>
            <div class="strip">
                <div class="container">
                    <div class="strip-grid">
                        <div class="strip-block">
                            <div>
                                <img src="{{ asset('front/img/martelo-02.svg') }}" alt="">
                            </div>
                            <div>
                                <h5>Pague com PIX<br> tenha 10% a mais<br> em lances</h5>
                            </div>
                        </div>
                        <div class="strip-block">
                            <div>
                                <img src="{{ asset('front/img/martelo-02.svg') }}" alt="">
                            </div>
                            <div>
                                <h5>Garantimos a entrega<br> de seus arremates em<br> todo Brasil</h5>
                            </div>
                        </div>
                        <div class="strip-block">
                            <div>
                                <img src="{{ asset('front/img/martelo-02.svg') }}" alt="">
                            </div>
                            <div>
                                <h5>Após o arremate você<br> escolhe entre receber<br> o produto ou valor</h5>
                            </div>
                        </div>
                        <div class="strip-block">
                            <div>
                                <img src="{{ asset('front/img/martelo-02.svg') }}" alt="">
                            </div>
                            <div>
                                <h5>Faça seu cadastro é gratuito<br> fácil e rápido e você pode<br> fazer seus lances</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="filters">
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
