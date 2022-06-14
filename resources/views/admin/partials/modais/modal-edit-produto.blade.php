<div class="modal fade" id="editProduto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="container modal-edit">
                    <div class="row">
                        <div class="col-md-3">
                            <p>ID Produto</p>
                        </div>
                        <div class="col-md-4">
                            <p>Descrição</p>
                        </div>
                        <div class="col-md-1 btn-edit">
                            <button><i class="fa-solid fa-pen-to-square"></i></button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-two mx-1">Em Leilão</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="mb-3 col-md-3">
                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                placeholder="#871345">
                        </div>
                        <div class="mb-3 col-md-9">
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Valor de Mercado</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Valor de Frete</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label for="exampleFormControlInput1" class="form-label">Data de Início</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1">
                        </div>
                        <div class="col-md-12">
                            <div class="card card-default">
                                <div class="card-body">
                                    <div class="p-2 card-2">
                                        <div class="form-group col-12 mb-2 required" data-check="foto">
                                            <div class="row">
                                                <div class="col-6 col-md-3 mb-2 preview-foto">
                                                    <button type="button"
                                                        class="btn btn-custom-1 btn-add-foto mb-3">+</button>
                                                    <input type="file" name="foto[]" class="d-none add-foto">
                                                    <div class="foto"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="my-3">
                            <label for="exampleFormControlInput1" class="form-label">Mais informações</label>
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
