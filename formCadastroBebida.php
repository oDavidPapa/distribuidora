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

                        <form name="form2" action="./controler/controlerBebida.php" onSubmit="return validacaoObrigatorio();"> 
                            <div class="form-group mb-3">
                                <input type="text" class="form-control"  name="idBebida" onKeypress="return tamanhoCodigoBebida(event);"  onChange="campo1Bebida();" onChange="campoCodigoBebida();" placeholder="Código">
                                <p align="left"><span id="campo1Form2"></span></p>
                                <p align="left"><span id="cod"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control"  name="nome" onKeypress="return somenteLetraBebida(event);" onChange="campo2Bebida();" onChange="campoCadastroNomeBebida();" placeholder="Nome">
                                <p align="left"><span id="campo2Form2"></span></p>
                                <p align="left"><span id="nome"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control"  name="volume" onKeypress="return somenteVolumeNumeroBebida(event);" onChange="campo3Bebida();" onChange="campoCadastroVolumeBebida();" placeholder="Volume L/ml">
                                <p align="left"><span id="campo3Form2"></span></p>
                                <p align="left"><span id="vol"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="preco" onKeypress="return somentePrecoNumeroBebida(event);" onChange="campo4Bebida();" onChange="campoCadastroPrecoBebida();" placeholder="Preço R$">
                                <p align="left"><span id="campo4Form2"></span></p>
                                <p align="left"><span id="preco"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control"  name="fabricante" onKeypress="return somenteFabricanteLetraBebida(event);" onChange="campo5Bebida();" onChange="campoCadastroFabricanteBebida();" placeholder="Fabricante">
                                <p align="left"><span id="campo5Form2"></span></p>
                                <p align="left"><span id="fabricante"></span></p>
                            </div>
                            <div class="form-group mb-3">
        <!-- era type:number--><input type="text" class="form-control"  name="quantidadeEstoque" onKeypress="return somenteQuantidadeNumeroBebida(event);" onChange="campo6Bebida();" onChange="campoCadastroQuantidadeBebida();" placeholder="Quantidade no Estoque">
                                <p align="left"><span id="campo6Form2"></span></p>
                                <p align="left"><span id="quantidadeEstoque"></span></p>
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

<!--id="nomeInput"
id="nomeInput"
id="cnpjInput"
id="enderecoInput" 
id="cidadeInput"
id="senhaInput"-->
