<div class="desktop">
    <div class="container">
        <div class="header-grid">
            <div>
                <a href="{{ route('index') }}"> <img src="{{ asset('front/img/logo.svg') }}" alt=""></a>
            </div>
            <div class="d-flex">
                <div>
                    <img src="{{ asset('front/img/martelo.svg') }}" alt="">
                </div>
                <div>
                   <a href="{{ route('todos.produtos') }}"> <h4>Leilões <span>Online</span></h4></a>
                </div>
            </div>
            <div class="d-flex">
                <div>
                    <img src="{{ asset('front/img/martelo.svg') }}" alt="">
                </div>
                <div>
                    <h4>Leilões <span>Arrematados</span> </h4>
                </div>
            </div>
            <div>
                <span></span>
            </div>
            <div class="d-flex">
                <div class="mx-1">
                    <button class="btn btn-one" data-bs-toggle="modal" data-bs-target="#modalLogin">Faça
                        Login</button>
                </div>
                <div class="mx-1">
                    <button class="btn btn-two">Compre Lance</button>
                </div>
            </div>

        </div>
    </div>
</div>
