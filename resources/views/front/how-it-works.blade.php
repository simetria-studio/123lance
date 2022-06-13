@extends('layouts.main')
@section('content')

<div class="testimonials how">
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
@endsection
