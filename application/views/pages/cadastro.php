<div class="content">
    <!-- Grid row -->
    <div class="row">
        <!-- Grid column -->
        <div class="col col-9 mt-5 mb-5" style="margin-left:12.5%;">
            <h3 class="text-center default-text py-3"><img src="assets/img/tik1.png" /></h3>
            <div class="card-body card">
                <h3 class="text-center default-text py-3"><i class="fa fa-user"></i> Cadastro de Usuário</h3>
                <!--Body-->
                <form id="form_cadastrouser" method="post" action="cadastro">
                    <div class="md-form col col-6" style="margin-left:25%;">
                        <i class="fa fa-envelope prefix grey-text"></i>
                        <input type="text" id="defaultForm-email" class="form-control">
                        <label for="defaultForm-email">Digite seu email</label>
                    </div>
                    <div class="md-form col col-6" style="margin-left:25%;">
                        <i class="fa fa-lock prefix grey-text"></i>
                        <input type="password" id="defaultForm-pass" class="form-control">
                        <label for="defaultForm-pass">Digite sua senha</label>
                    </div>
                    <div class="text-center mt-5">
                        <button type="submit"class="btn btn-primary waves-effect waves-light col-6 col-md-4">Cadastrar</button>

                    </div>
                </form>
                <div class="text-center">
                    <a href="<?php echo base_url(); ?>"><button class="btn btn-primary waves-effect waves-light col-6 col-md-4">Voltar</button></a>
                </div>
            </div>
        </div>
    </div>
</div>









