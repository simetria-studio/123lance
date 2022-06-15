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
                    <div class="modal-info" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <h5>+ informações</h5>
                    </div>
                    <div class="price">
                        <div>
                            <h5>Valor de <span>Mercado</span> </h5>
                            <h2>R$ 25.000,00</h2>
                        </div>
                        <div>
                            <p>O Valor de mercado equivale ao preço do produto em lojas de varejo</p>
                        </div>
                    </div>
                </div>
                @include('front.partials.leiloes-mobile')
                @include('front.partials.leiloes-desktop')
                <div class="section-3">
                    <div>
                        <div>
                            <button class="btn btn-two" data-bs-toggle="modal" data-bs-target="#modalLogin">Faça seu
                                lance</button>

                            <h4><span>1</span><span>5</span></h4>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="filters filter-product">
        <div class="container">
            <div class="filter-grid">
                <div>
                    <a href="">Leilões Online</a>
                    <a href="" class="a">Próximos leilões</a>
                    <a href="{{ route('leiloes.arrematados') }}" class="a">Leilões Arrematados</a>
                </div>
                <div class="d-flex justify-content-end">
                    <div class="all">
                        <a href=""><span><i class="fa-solid fa-arrow-right-long"></i></span> ver todos</a>
                    </div>
                    <div class="navigation d-sm-none">
                        <a href=""><i class="fa-solid fa-angle-left"></i></a>
                        <a href=""><i class="fa-solid fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products">
        <div class="container">
            <div class="product-grid" id="products">
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
                    <div class="img-test">
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row modal-desc">
                            <div class="col-md-5 block p-3">
                                <h1>Descrição</h1>
                                <h2>Console PlayStation 5 Controle Dual Sense PS5 Branco e Preto</h2>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic magni molestias animi odit
                                    natus totam earum quam nihil labore dolores necessitatibus inventore, excepturi quidem
                                    tenetur nam. Assumenda possimus illo repudiandae? Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Sequi odit, voluptatum maxime officiis quo asperiores inventore
                                    blanditiis voluptate accusantium atque, aperiam animi ad nostrum at illo, nesciunt
                                    quidem error aspernatur.</p>
                            </div>
                            <div class="col-md-5 block p-3">
                                <h1>Especificações</h1>
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <ul class="list-group">
                                            <li class="list-group-item">Marca:</li>
                                            <li class="list-group-item">Modelo:</li>
                                            <li class="list-group-item">Polegadas:</li>
                                            <li class="list-group-item">Frequência:</li>
                                            <li class="list-group-item">Sistema Operacional:</li>
                                            <li class="list-group-item">USB:</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="list-group">
                                            <li class="list-group-item">Itens da descrição do produto</li>
                                            <li class="list-group-item">Itens da descrição do produto</li>
                                            <li class="list-group-item">Itens da descrição do produto</li>
                                            <li class="list-group-item">Itens da descrição do produto</li>
                                            <li class="list-group-item">Itens da descrição do produto</li>
                                            <li class="list-group-item">Itens da descrição do produto</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
