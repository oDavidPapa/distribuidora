<?php include_once './include/cabecalho.php'; ?>

<body>

    <?php include_once './include/menuNavegacao.php'; ?>

    <div class="container">

        <div class="row mb-5 pt-5">

            <div class=" col-md-5 offset-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title text-muted mb-4">Identificação do Usuário</h5>
                        <form>
                            <div class="form-group mb-3">
                                <!--<h6 class="text-muted"><label for="email">Email</label></h6> -->
                                <input type="text" class="form-control" id="emailInput" placeholder="E-mail">
                            </div>
                            <div class="form-group mb-3">
                                <!--<h6 class="text-muted"><label for="formGroupExampleInput2">Senha</label></h6>-->
                                <input type="password" class="form-control" id="senhaInput" placeholder="Senha">
                            </div>
                            <button class="btn texte-center btn-primary btn-lg btn-block pt-0 pb-0" href='#'>Entrar</button>
                        </form>

                        <div class="card-footer bg-white mt-3 pt-2">
                            <div class="form-check form-check-inline offset-md-1">
                                <input class="form-check-input small" type="checkbox" id="manterConectado" value="sim">
                                <label class="form-check-label mb-3 small" for="manterConectado">Manter-me conectado</label>
                            </div>
                            <p class="text-muted">Não possui conta?</p>
                            <a class="card-link mt-0" href="./cadastroCliente.php"> Cadastrar </a>

                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</body>

<?php include_once './include/rodape.php'; ?>