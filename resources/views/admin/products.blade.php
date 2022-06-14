@extends('layouts.painel')
@section('content')
    <div class="container mt-5">
        <div class="filters-group">
            <div class="row">
                <div class="col-12 col-md-12 m-filters">
                    <div>
                        <button class="btn btn-one mx-1">Todos</button>
                    </div>
                    <div>
                        <button class="btn btn-two mx-1">Em Leilão</button>
                    </div>
                    <div>
                        <button class="btn btn-three mx-1">Arrematados</button>
                    </div>
                    <div>
                        <button class="btn btn-four mx-1">Inativos</button>
                    </div>
                    <div class="search">
                        <div class="input-group mb-3">
                            <input type="search" class="form-control" placeholder="Buscar Produto"
                                aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                        </div>
                    </div>
                    <div class="ms-md-5">
                        <button class="btn btn-two mx-1">Add Novo Produto</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="filters-products row">
            <div class="col-md-2 col-6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>ID Produto</option>

                </select>
            </div>
            <div class="col-md-4 col-6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Descrição</option>

                </select>
            </div>
            <div class="col-md-2 col-6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Valor de Mercado</option>

                </select>
            </div>
            <div class="col-md-2 col-6">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Status</option>

                </select>
            </div>

        </div>
        <div class="pedidos">
            <div class="produto-grid row">
                <div class="col-md-2 col-6">
                    <p>#871345</p>
                </div>
                <div class="col-md-4 col-12">
                    <p>Smart TV Monitor LG 23.6" LCD LED 24TL520S FHD</p>
                </div>
                <div class="col-md-2 col-12">
                    <p>R$ 989,10</p>
                </div>

                <div class="col-md-2 col-6">
                    <button class="btn btn-two mx-1">Em leilão</button>
                </div>
                <div class="dropdown col-md-2 col-6">
                    <a id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">...</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editPedido"><button
                                    class="btn btn-alt-1"><i class="fa-solid fa-pen-to-square"></i> Editar</button></a>
                        </li>
                        <li><a class="dropdown-item" href="#"><button class="btn btn-alt-2"><i
                                        class="fa-solid fa-ban"></i> Inativar</button></a></li>
                        <li><a class="dropdown-item" href="#"><button class="btn btn-alt-3"><i
                                        class="fa-solid fa-circle-plus"></i> Add Saldo</button></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editPedido" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="container modal-edit">
                        <div class="row">
                            <div class="col-md-4 d-flex flex-column">
                                <div>
                                    <p>ID Pedido</p>
                                </div>
                                <div class="mt-3">
                                    <h5>#871345</h5>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-column">
                                <div>
                                    <p>Data do pedido</p>
                                </div>
                                <div class="mt-3">
                                    <h5><i class="fa-solid fa-calendar-days"></i> 15/05/2022</h5>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-column">
                                <div>
                                    <p>Status</p>
                                </div>
                                <div class="mt-1">
                                    <button class="btn btn-alt-3">Completo</button>
                                </div>
                            </div>
                        </div>
                        <div>
                            <p>Cliente</p>
                        </div>
                        <div class="mt-3">
                            <h5><i class="fa-solid fa-user"></i> Luis Carlos Vilasboas Paim</h5>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4 d-flex flex-column">
                                <div>
                                    <p>Lances</p>
                                </div>
                                <div class="mt-3">
                                    <h5>200 Lances</h5>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-column">
                                <div>
                                    <p>Valor</p>
                                </div>
                                <div class="mt-3">
                                    <h5>R$ 200,00</h5>
                                </div>
                            </div>
                            <div class="col-md-4 d-flex flex-column">
                                <div>
                                    <p>Bônus</p>
                                </div>
                                <div class="mt-3">
                                    <h5>R$ 200,00</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <p>Forma de Pagamento</p>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="PIX" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="my-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum quo quis autem</textarea>
                    </div>
                    <div class="d-flex">
                        <button class="btn btn-salvar">Salvar</button>
                        <button class="btn btn-cancel" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
