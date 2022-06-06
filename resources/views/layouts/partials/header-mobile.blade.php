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
            <button class="btn btn-one">Faça Login</button>
        </div>
        <div class="my-2">
            <button class="btn btn-two">Compre Lance</button>
        </div>
        <div class="my-3">
            <a href="">Leilões Online</a>
            <div class="underline"></div>
        </div>
        <div class="my-3">
            <a href="">Leilões Arrematados</a>
            <div class="underline"></div>
        </div>
        <div class="my-3">
            <a href="">Como funciona?</a>
            <div class="underline"></div>
        </div>
    </div>
    <div class="menu-footer d-flex flex-column">
        <div class="d-flex align-items-center">
            <div>
                <img src="{{ asset('front/img/martelo-3.svg') }}" alt="">
            </div>
            <div class="ms-1">
                <p>Pague com PIX tenha 10% a mais em lances</p>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div>
                <img src="{{ asset('front/img/martelo-3.svg') }}" alt="">
            </div>
            <div class="ms-1">
                <p>Garantimos a entrega de seus arremates em todo Brasil</p>
            </div>
        </div>
        <div class="d-flex align-items-center">
            <div>
                <img src="{{ asset('front/img/martelo-3.svg') }}" alt="">
            </div>
            <div class="ms-1">
                <p>Após o arremate você escolhe entre receber o produto ou valor</p>
            </div>
        </div>

    </div>
</div>
