<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>123LANCE</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/0ab2bcde1c.js" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}">
</head>

<body>
    <header>
        @include('layouts.partials.header-desktop')
        @include('layouts.partials.header-mobile')
    </header>
    <main>
        @yield('content')
    </main>

    <!-- Modal -->
    <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container">
                        <div class="row form-login px-2 px-md-5">
                            <div class="col-4 p-3">
                                <img src="{{ asset('front/img/logo.svg') }}" alt="">
                            </div>
                            <div class="col-8  p-2 p-md-5">
                                <p>Faça login para<br> dar seu lance</p>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="E-mail" placeholder="E-mail">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" placeholder="Senha">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-two">Login</button>
                            </div>
                            <div class="text-center my-3 form-text">
                                <p>Não tem Login?</p>
                                <a href="{{ route('cadastro') }}">Cadastre-se</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="block-footer">
                    <h2>Institucional</h2>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Quem Somos</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Depoimentos</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Blog</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Contato</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Termos de Uso</a>
                </div>
                <div class="block-footer">
                    <h2>Como Funciona</h2>
                    <a href="{{ route('como.funciona') }}"><span><i class="fa-solid fa-arrow-right"></i></span>Passo a Passo</a>
                    <a href="{{ route('faq') }}"><span><i class="fa-solid fa-arrow-right"></i></span>Perguntas Frequentes</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Dicas e Estratégias</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Minha Conta</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Segurança e Entrega</a>
                </div>
                <div class="block-footer">
                    <h2>Termos de uso</h2>
                    <a href="{{ route('politicas.privacidade') }}"><span><i class="fa-solid fa-arrow-right"></i></span>Política de privacidade</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Políticas de cookies</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Termos e condições</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Politica de entrega </a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Política de reembolso</a>
                </div>
                <div class="block-footer">
                    <h2>Suporte</h2>
                    <a href="">E-mail</a>
                    <a href="">Telefone</a>
                    <a href="">Whatsapp</a>
                    <a href="">Ticket</a>
                </div>
                <div class="block-footer">
                    <h2>Forma de pagamento</h2>
                    <div>
                        <img src="{{ asset('front/img/pix.svg') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('front/img/pagamentos.svg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('front/js/script.js') }}"></script>
</body>

</html>
