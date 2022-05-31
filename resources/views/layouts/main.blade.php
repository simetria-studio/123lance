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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/css/main.min.css') }}">
</head>

<body>
    <header>
        <div class="container">
            <div class="header-grid">
                <div>
                    <img src="{{ asset('front/img/logo.svg') }}" alt="">
                </div>
                <div class="d-flex">
                    <div>
                        <img src="{{ asset('front/img/martelo.svg') }}" alt="">
                    </div>
                    <div>
                        <h4>Leilões <span>Online</span></h4>
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
                        <button class="btn btn-one">Faça Login</button>
                    </div>
                    <div class="mx-1">
                        <button class="btn btn-two">Compre Lance</button>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
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
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Passo a Passo</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Perguntas Frequentes</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Dicas e Estratégias</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Minha Conta</a>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Segurança e Entrega</a>
                </div>
                <div class="block-footer">
                    <h2>Termos de uso</h2>
                    <a href=""><span><i class="fa-solid fa-arrow-right"></i></span>Política de privacidade</a>
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
</body>

</html>
