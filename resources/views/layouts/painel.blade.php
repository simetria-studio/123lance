<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>123LANCE - PAINEL</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('painel/css/main.min.css') }}">
</head>

<body>
    <div id="app">
        <div class="side-menu">
            <div>
                <img src="{{ asset('painel/img/logo.svg') }}" alt="">
            </div>
            <div class="d-flex flex-column menu">
                <div class="my-3">
                    <a href="{{ route('dashboard') }}">
                        <div class="d-flex">
                            <div class="mt-1">
                                <img src="{{ asset('painel/img/ri_dashboard-3-fill.svg') }}" alt="">
                            </div>
                            <div class="mx-2">
                                <p>Painel<br>
                                    <span>Estatísticas</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="my-3">
                    <a href="{{ route('pedidos') }}">
                        <div class="d-flex">
                            <div class="mt-1">
                                <img src="{{ asset('painel/img/cart.svg') }}" alt="">
                            </div>
                            <div class="mx-2">
                                <p>Lista de<br>
                                    <span>Pedidos</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="my-3">
                    <a href="">
                        <div class="d-flex">
                            <div class="mt-1">
                                <img src="{{ asset('painel/img/basket.svg') }}" alt="">
                            </div>
                            <div class="mx-2">
                                <p>Lista de<br>
                                    <span>Produtos</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="my-3">
                    <a href="">
                        <div class="d-flex">
                            <div class="mt-1">
                                <img src="{{ asset('painel/img/list.svg') }}" alt="">
                            </div>
                            <div class="mx-2">
                                <p>Lista de<br>
                                    <span>Pacotes</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="my-3">
                    <a href="">
                        <div class="d-flex">
                            <div class="mt-1">
                                <img src="{{ asset('painel/img/check.svg') }}" alt="">
                            </div>
                            <div class="mx-2">
                                <p>Lista de<br>
                                    <span>Clientes</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="my-3">
                    <a href="">
                        <div class="d-flex">
                            <div class="mt-1">
                                <img src="{{ asset('painel/img/martelo.svg') }}" alt="">
                            </div>
                            <div class="mx-2">
                                <p>Lista de<br>
                                    <span>Leilões</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="my-3">
                    <a href="">
                        <div class="d-flex">
                            <div class="mt-1">
                                <img src="{{ asset('painel/img/site.svg') }}" alt="">
                            </div>
                            <div class="mx-2">
                                <p>Gerenciar<br>
                                    <span>Website</span>
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <main class="main-content">
            @yield('content')
        </main>
    </div>
</body>

</html>
