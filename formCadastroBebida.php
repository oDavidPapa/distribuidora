<?php include_once './include/cabecalho.php'; ?>


<body>

     <?php
     session_start();
    if (isset($_SESSION['usuario'])) {
        include_once './include/menuNavegacaoLogado.php';
    } else {
        include_once './include/menuNavegacao.php';
    }
    ?>

    <div class="container">

        <div class="row mb-2 pt-4 pb-4">

            <div class=" col-md-6 offset-md-3">
                <div class="card text-center">
                    <div class="card-body ">
                        <h5 class="card-title text-muted mt-3 mb-3">Cadastro de Bebidas</h5>

                        <form action="./controler/controlerBebida.php"> 
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" required="" id="nomeInput" name="idBebida" placeholder="Código">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" required="" id="nomeInput" name="nome" placeholder="Nome">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" required="" id="cnpjInput" name="volume" placeholder="Volume L/ml">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" required="" id="enderecoInput" name="preco" placeholder="Preço R$">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" required="" id="cidadeInput" name="fabricante" placeholder="Fabricante">
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" class="form-control" required="" id="senhaInput" name="quantidadeEstoque" placeholder="Quantidade no Estoque">
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" class="form-control" value="1" name="opcao">
                            </div>
                            <input class="form-group btn texte-center btn-primary btn-lg btn-block mt-4 pt-0 pb-0" type="submit" value="Cadastar">
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<?php include_once './include/rodape.php'; ?>
