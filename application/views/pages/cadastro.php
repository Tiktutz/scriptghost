<div class="content">
    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col col-9 mt-5 mb-5" style="margin-left:12.5%;">

            <div class="card-body card">
                <h3 class="text-center default-text py-3"><img src="assets/img/tik1.png" /></h3>
                <?php if ($result == 'error') { ?>
                    <div class="alert alert-danger">Erro no cadastro!<ul><?php echo $erros; ?></ul></div>
                <?php } elseif ($result == 'success') { ?>
                    <div class="alert alert-success">Usuário cadastrado com sucesso!</div>
                <?php } ?>
                <h3 class="text-center default-text py-3"><i class="fa fa-user"></i> Cadastro de Usuário</h3>
                <!--Body-->
                <form id="form_cadastrouser" enctype="multipart/form-data" method="post" action="<?php echo base_url(); ?>cadastro">
                    <div class="row">
                        <div class="col-md-5 pr-md-1">
                            <div class="form-group">
                                <label>Usuário</label>
                                <input id="usuario_login" name="usuario[login]" type="text" class="form-control" placeholder="Login" >
                                <?php echo form_error('usuario[login]', '<span class="alert text-danger" >', '</span>'); ?>
                            </div>
                        </div>
                        <div class="col-md-3 px-md-1">
                            <div class="form-group">
                                <label>Senha</label>
                                <input id="usuario_senha" name="usuario[senha]" type="password" class="form-control" placeholder="Senha" >
                            </div>
                        </div>
                        <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input id="usuario_email" name="usuario[email]" type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                                <label>Nome</label>
                                <input id="usuario_nome" name="usuario[nome]" type="text" class="form-control" placeholder="Nome">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                                <label>Sobrenome</label>
                                <input id="usuario_sobrenome" name="usuario[sobrenome]" type="text" class="form-control" placeholder="Sobrenome" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 pr-md-1">
                            <div class="form-group">
                                <label>Gênero</label>
                                <select id="usuario_genero" name="usuario[genero]" class="form-control">
                                    <option value="">Escolha seu gênero</option>
                                    <option value="masculino">Masculino</option>
                                    <option value="feminino">Feminino</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-1">
                            <div class="form-group">
                                <label>Data de Nascimento</label>
                                <input id="usuario_data" name="usuario[data]" type="date" class="form-control"  >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label>Endereço</label>
                                <input id="usuario_endereco" name="usuario[endereco]" type="text" class="form-control" placeholder="Endereço" >
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Bairro</label>
                                <input id="usuario_bairro" name="usuario[bairro]" type="text" class="form-control" placeholder="Bairro" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 pr-md-1">
                            <div class="form-group">
                                <label>Cidade</label>
                                <input id="usuario_cidade" name="usuario[cidade]" type="text" class="form-control" placeholder="Cidade">
                            </div>
                        </div>
                        <div class="col-md-4 px-md-1">
                            <div class="form-group">
                                <label>Estado</label>
                                <input id="usuario_estado" name="usuario[estado]" type="text" class="form-control" placeholder="Estado" >
                            </div>
                        </div>
                        <div class="col-md-4 pl-md-1">
                            <div class="form-group">
                                <label>CEP</label>
                                <input id="usuario_cep" name="usuario[cep]" type="text" class="form-control" placeholder="CEP">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 pr-md-1">
                            <div class="form-group">
                                <label>Imagem de Perfil</label>
                                <input id="arquivo" name="arquivo" type="file" class="form-control" placeholder="Imagem de Perfil">
                            </div>
                        </div>

                    </div>
                </form>
                <div class="card-footer mt-5 text-center">
                    <button id="btn-cadastrouser" type="button" class="btn btn-fill btn-primary text-center">Cadastrar</button>
                    <a class="btn btn-fill btn-primary text-white text-center" href="<?php echo base_url(); ?>">Voltar</a>
                </div>
            </div>

        </div>
    </div>


</div>









