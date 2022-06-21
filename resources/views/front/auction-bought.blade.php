@extends('layouts.main')
@section('content')
    <div class="all-products">
        <div class="filters in-products">
            <div class="container">
                <div class="filter-grid">
                    <div>
                        <a href="">Leilões Arrematados</a>
                        {{-- <a href="" class="a">Próximos leilões</a>
                        <a href="" class="a">Leilões Arrematados</a> --}}
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
                <div class="product-grid grid-columns">
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div>
                        <div class="product-body">
                            <a href="{{ route('produto.lance') }}">
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
                                        <a href="{{ route('produto.lance') }}"> <button class="btn btn-two">Arrematados</button></a>
                                    </div>
                                    <div>
                                        <h4><span>1</span><span>5</span></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
