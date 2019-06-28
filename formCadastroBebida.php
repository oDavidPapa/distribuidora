<?php include_once './include/cabecalho.php'; ?>


<body>

     <?php
     session_start();
        if (isset($_SESSION['usuario'])) {
        if ($_SESSION['usuario']->email == 'admin' && $_SESSION['usuario']->senha == 'admin') {
            include_once './include/menuAdmin.php';
        } else {
            include_once './include/menuNavegacaoLogado.php';
        }
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

                        <form name="form2" action="./controler/controlerBebida.php" onSubmit="return validacaoObrigatorio(); return tamanhocodigo();"> 
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="nomeInput" name="idBebida" onKeypress="return tamanhocodigo(event);" placeholder="Código">
                                <p><span id="campo1"></span></p>
                                <p><span id="cod"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="nomeInput" name="nome" onKeypress="return somenteLetraNome(event);" placeholder="Nome">
                                <p><span id="campo2"></span></p>
                                <p><span id="nome"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="cnpjInput" name="volume" onKeypress="return somenteNumeroVolume(event);" placeholder="Volume L/ml">
                                <p><span id="campo3"></span></p>
                                <p><span id="vol"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="enderecoInput" name="preco" onKeypress="return somenteNumeroPreco(event);" placeholder="Preço R$">
                                <p><span id="campo4"></span></p>
                                <p><span id="preco"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="cidadeInput" name="fabricante" onKeypress="return somenteLetraFabricante(event);" placeholder="Fabricante">
                                <p><span id="campo5"></span></p>
                                <p><span id="fabricante"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" class="form-control" id="senhaInput" name="quantidadeEstoque" placeholder="Quantidade no Estoque">
                                <p><span id="campo6"></span></p>
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
