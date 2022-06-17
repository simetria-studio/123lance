<div class="fade-line"> </div>
<div class="m-header">
    <div class="container">
        <div class="row block-m">
            <div class="col-6">
                <a href="{{ route('index') }}"> <img src="{{ asset('front/img/logo.svg') }}" alt=""></a>
            </div>
            <div class="col-6 txt-align" id="btn-menu">
                <h4>Menu <span><img src="{{ asset('front/img/menu.svg') }}" alt=""></span></h4>
            </div>
        </div>
    </div>
</div>

<div class="menu-mobile">
    <div class="header-menu">
        <button class="btn btn0close">x</button>
    </div>
    <div class="body-menu d-flex flex-column">
        <div class="my-2">
            <button class="btn btn-one" data-bs-toggle="modal" data-bs-target="#modalLogin">Faça Login</button>
        </div>
        <div class="my-2">
           <a href="{{ route('compra.lance') }}"> <button class="btn btn-two">Compre Lance</button></a>
        </div>
        <div class="my-3">
            <a href="{{ route('todos.produtos') }}">Leilões Online</a>
            <div class="underline"></div>
        </div>
        <div class="my-3">
            <a href="{{ route('leiloes.arrematados') }}">Leilões Arrematados</a>
            <div class="underline"></div>
        </div>
        <div class="my-3">
            <a href="">Como funciona?</a>
            <div class="underline"></div>
        </div>
    </div>
    <div class="menu-footer d-flex flex-column">
        <div class="d-flex align-items-center py-2">
            <div>
                <img src="{{ asset('front/img/martelo-3.svg') }}" alt="">
            </div>
            <div class="ms-1">
                <p>Pague com PIX tenha 10% a mais em lances</p>
            </div>
        </div>
        <div class="d-flex align-items-center py-2">
            <div>
                <img src="{{ asset('front/img/martelo-3.svg') }}" alt="">
            </div>
            <div class="ms-1">
                <p>Garantimos a entrega de seus arremates em todo Brasil</p>
            </div>
        </div>
        <div class="d-flex align-items-center py-2">
            <div>
                <img src="{{ asset('front/img/martelo-3.svg') }}" alt="">
            </div>
            <div class="ms-1">
                <p>Após o arremate você escolhe entre receber o produto ou valor</p>
            </div>
        </div>

    </div>
</div>


<div class="bottom-menu">
    <div class="content-m d-flex">
        <div>
            <a href="{{ route('index') }}">
                <div class="d-flex m-iten">
                    <div>
                        <img src="{{ asset('front/img/home.svg') }}" alt="">
                    </div>
                    <div>
                        <p>Tela<br>
                            <span>Inicial</span>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="d-flex m-iten">
            <div>
                <img src="{{ asset('front/img/martelo-4.svg') }}" alt="">
            </div>
            <div>
                <p>Leilões<br>
                    <span>Online</span>
                </p>
            </div>
        </div>
        <div class="d-flex m-iten" data-bs-toggle="modal" data-bs-target="#modalLogin">
            <div>
                <img src="{{ asset('front/img/fire.svg') }}" alt="">
            </div>
            <div>
                <p>Meus<br>
                    <span>Lances</span>
                </p>
            </div>
        </div>
    </div>
</div>
