<?php include_once './include/cabecalho.php'; ?>

<body>

    <?php include_once './include/menuNavegacao.php'; ?>
    <?php
    if (isset($_REQUEST['status'])) {
        $status = $_REQUEST['status'];
    } else {
        $status = 0;
    }
    ?>

    <div class="container">

        <div class="row mb-5 pt-5">

            <div class=" col-md-5 offset-md-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title text-muted mb-4">Identificação do Usuário</h5>
                        <form name="form3"  action="controler/loginControler.php" onSubmit="return verificaSenhaLogin();">
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="login" onKeypress="return verificaEmailLogin(event);" id="emailInput" placeholder="E-mail">
                                <p align="left"><span id="email"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" name="senha" id="senhaInput" placeholder="Senha">
                                <p align="left"><span id="senha"></span></p>
                            </div>
                            <input type="hidden" value="<?php echo $status ?>" name="status">
                            <input type="submit" value="Entrar" class="btn texte-center btn-primary btn-lg btn-block pt-0 pb-0">

                            <div class="card-footer bg-white mt-3 pt-2">
                                <div class="form-check form-check-inline offset-md-1">
                                    <input class="form-check-input small" type="checkbox" id="manterConectado" name="manterConectado">
                                    <label class="form-check-label mb-3 small" for="manterConectado">Manter-me conectado</label>
                                </div>
                                <p class="text-muted">Não possui conta?</p>
                                <a class="card-link mt-0" href="./formCadastroCliente.php"> Cadastre-se</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php
if (isset($_REQUEST['falhaLogin'])) {
    ?>
    <script>
        document.getElementById('senha').innerHTML = "<p><font size='2' color='red'>E-mail ou Senha Incorretos</font></p>";
    </script>
    <?php
}
?>
</body>

<?php include_once './include/rodape.php'; ?>