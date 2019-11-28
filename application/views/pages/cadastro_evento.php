<div class="content">
    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col col-9 mt-5 mb-5" style="margin-left:12.5%;">

            <div class="card-body card">
                <?php if ($result == 'error') { ?>
                    <div class="alert alert-danger">Erro no cadastro!<ul><?php echo $erros; ?></ul></div>
                <?php } elseif ($result == 'success') { ?>
                    <div class="alert alert-success">Evento cadastrado com sucesso!</div>
                <?php } ?>
                <h3 class="text-center default-text py-3"><i class="fa fa-bookmark"></i> Cadastro de Eventos</h3>
                <!--Body-->
                <form id="form_cadastroevent" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>cadastro_evento">
                    <div class="row">
                        <div class="col-md-5 pr-md-1">
                            <div class="form-group">
                                <label>Nome do Evento</label>
                                <input id="evento_nome" name="evento[nome]" type="text" class="form-control" placeholder="Nome do Evento" >
                                <?php echo form_error('evento[nome]', '<span class="alert text-danger" >', '</span>'); ?>
                            </div>
                        </div>
                        <div class="col-md-3 px-md-1">
                            <div class="form-group">
                                <label>Inicio do Evento</label>
                                <input id="evento_inicio" name="evento[inicio]" type="datetime-local" class="form-control" placeholder="Inicio" >
                            </div>
                        </div>
                        <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Final do Evento</label>
                                <input id="evento_final" name="evento[final]" type="datetime-local" class="form-control" placeholder="Final">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                                <label>Categoria</label>
                                <select id="evento_categoria" name="evento[categoria]" class="form-control">
                                    <option value="">Escolha a categoria do evento</option>
                                    <option value="social">Social</option>
                                    <option value="corporativo">Corporativo</option>
                                    <option value="empresarial">Empresarial</option>
                                    <option value="espiritual">Espiritual</option>
                                    <option value="academico">Acadêmico</option>
                                    <option value="cultural">Cultural</option>
                                    <option value="entretenimento">Entretenimento</option>
                                    <option value="esportivo">Esportivo</option>
                                    <option value="politico">Político</option>
                                    <option value="educacional">Educacional</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                                <label>Banner do Evento</label>
                                <input id="arquivo" name="arquivo" type="file" class="form-control" placeholder="Banner do Evento">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input id="evento_endereco" name="evento[endereco]" type="text" class="form-control" placeholder="Endereço" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bairro</label>
                                <input id="evento_bairro" name="evento[bairro]" type="text" class="form-control" placeholder="Bairro" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input id="evento_cidade" name="evento[cidade]" type="text" class="form-control" placeholder="Cidade">
                            </div>
                        </div>
                        <div class="col-md-4 px-md-1">
                            <div class="form-group">
                                <label>Estado</label>
                                <input id="evento_estado" name="evento[estado]" type="text" class="form-control" placeholder="Estado" >
                            </div>
                        </div>
                        <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                                <label>CEP</label>
                                <input id="evento_cep" name="evento[cep]" type="text" class="form-control" placeholder="CEP">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pr-md-1">
                            <div class="form-group">
                                <label>Descrição do Evento</label>
                                <textarea id="evento_descricao" name="evento[descricao]" class="form-control" placeholder="Digite a descrição do evento..."></textarea>
                            </div>
                        </div>

                    </div>
                </form>
                <div class="card-footer mt-5 text-center">
                    <button id="btn-cadastroevent" type="button" class="btn btn-fill btn-primary text-center">Cadastrar</button>
                    <a class="btn btn-fill btn-primary text-white text-center" href="<?php echo base_url(); ?>">Voltar</a>
                </div>
            </div>

        </div>
    </div>


</div>









