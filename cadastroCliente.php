<?php include_once './include/cabecalho.php'; ?>
<?php include_once './dao/CidadeDAO.php';?>

<body>
    <?php include_once './include/menuNavegacao.php'; ?>

    <div class="container">

        <div class="row mb-2 pt-4 pb-4">

            <div class=" col-md-6 offset-md-3">
                <div class="card text-center">
                    <div class="card-body ">
                        <h5 class="card-title text-muted mt-3 mb-3">Cadastro de Usuário</h5>

                        <form action="controler/controlerCliente.php" method="POST"> 
                            <h6 class="text-muted text-justify"><label for="email">Dados Pessoais:</label></h6>
                            <div class="form-group mb-3">
                                <input type="text" required class="form-control" id="nomeInput" name="nome" placeholder="Nome">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" required class="form-control" id="cnpjInput" name="cnpj" placeholder="CNPJ">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" required class="form-control" id="enderecoInput" name="endereco" placeholder="Endereço. Ex: Rua, número, bairro">
                            </div>
                            <div class="form-group mb-3">
                                <select required class="form-control" id="cidadeInput" name="cidade">
                                    <?php
                                    $cidades = array();
                                    $cidadeDAO = new CidadeDAO();
                                    $cidades = $cidadeDAO->getCidades();
                                    
                                    foreach ($cidades as $cidade) {
                                        echo"<option  name='cidade' value='$cidade->idCidade'>$cidade->cidade</option>";
                                    }
                                    ?>                            
                                    
                                </select>
                                
                            </div>
                            <h6 class="text-muted text-justify"><label for="email">Informações site:</label></h6>
                            <div class="form-group mb-3">
                                <input type="email" required class="form-control" id="emailInput" name="email" placeholder="E-mail">
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" required class="form-control" id="senhaInput" name="senha" placeholder="Senha">
                            </div>
                              <div class="form-group mb-3">
                                  <input type="hidden" class="form-control" value="1" name="opcao">
                            </div>
                            <button class="btn texte-center btn-primary btn-lg btn-block mt-4 pt-0 pb-0">Cadastrar</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<?php include_once './include/rodape.php'; ?>