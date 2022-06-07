@extends('layouts.painel')
@section('content')
    <div class="container mt-5">
        <div class="filters-group">
            <div class="row">
                <div class="col-12 col-md-8 m-filters">
                    <div>
                        <button class="btn btn-one mx-1">Todos</button>
                    </div>
                    <div>
                        <button class="btn btn-two mx-1">Completos</button>
                    </div>
                    <div>
                        <button class="btn btn-three mx-1">Pendentes</button>
                    </div>
                    <div>
                        <button class="btn btn-four mx-1">Cancelados</button>
                    </div>
                    <div>
                        <button class="btn btn-five mx-1">Reembolsados</button>
                    </div>

                </div>
            </div>
        </div>
        <div class="filters">
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>ID Pedido</option>

                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Usuário</option>

                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Data</option>

                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Lances</option>

                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Valor</option>

                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Bônus</option>

                </select>
            </div>
            <div>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Status</option>

                </select>
            </div>
        </div>
        <div class="pedidos">
            <div class="pedidos-grid">
                <div>
                    <p>#871345</p>
                </div>
                <div>
                    <p><span><i class="fa-solid fa-user"></i></span> lcvpaim</p>
                </div>
                <div>
                    <p><span><i class="fa-solid fa-calendar-days"></i></span> 15/05/2022</p>
                </div>
                <div>
                    <p>200 Lances</p>
                </div>
                <div>
                    <p>R$ 200,00</p>
                </div>
                <div>
                    <p>200,00</p>
                </div>
                <div>
                    <button class="btn btn-five mx-1">Reembolsados</button>
                </div>
                <div>
                    <a href="">...</a>
                </div>
            </div>
            <div class="pedidos-grid">
                <div>
                    <p>#871345</p>
                </div>
                <div>
                    <p><span><i class="fa-solid fa-user"></i></span> lcvpaim</p>
                </div>
                <div>
                    <p><span><i class="fa-solid fa-calendar-days"></i></span> 15/05/2022</p>
                </div>
                <div>
                    <p>200 Lances</p>
                </div>
                <div>
                    <p>R$ 200,00</p>
                </div>
                <div>
                    <p>200,00</p>
                </div>
                <div>
                    <button class="btn btn-five mx-1">Reembolsados</button>
                </div>
                <div>
                    <a href="">...</a>
                </div>
            </div>
            <div class="pedidos-grid">
                <div>
                    <p>#871345</p>
                </div>
                <div>
                    <p><span><i class="fa-solid fa-user"></i></span> lcvpaim</p>
                </div>
                <div>
                    <p><span><i class="fa-solid fa-calendar-days"></i></span> 15/05/2022</p>
                </div>
                <div>
                    <p>200 Lances</p>
                </div>
                <div>
                    <p>R$ 200,00</p>
                </div>
                <div>
                    <p>200,00</p>
                </div>
                <div>
                    <button class="btn btn-five mx-1">Reembolsados</button>
                </div>
                <div>
                    <a href="">...</a>
                </div>
            </div>
        </div>
    </div>
@endsection
