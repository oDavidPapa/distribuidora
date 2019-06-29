<?php
include_once './include/cabecalho.php';

session_start();
$bebida = $_SESSION['bebida'];

?>

<body>

 <?php
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

                        <form name="form5" action="./controler/controlerBebida.php"> 
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" value="<?php echo $bebida->idBebida?>"readonly name="idBebida">
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" onKeypress="return somenteLetraNome(event);" value="<?php echo $bebida->nome?>"  name="nome">
                                <p><span id="nome"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" onKeypress="return somenteNumeroVolume(event);"  value="<?php echo $bebida->volume?>" name="volume">
                                <p><span id="vol"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" onKeypress="return somenteNumeroPreco(event);" value="<?php echo $bebida->preco?>"  name="preco">
                                <p><span id="preco"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" onKeypress="return somenteLetraFabricante(event);" value="<?php echo $bebida->fabricante?>" name="fabricante">
                                <p><span id="fabricante"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="number" class="form-control"  value="<?php echo $bebida->quantidadeEstoque?>" name="quantidadeEstoque">
                            </div>
                            <div class="form-group mb-3">
                                <input type="hidden" class="form-control" value="5" name="opcao">
                            </div>
                            <input class="form-group btn text-center btn-primary mt-3 mr-3 " type="submit" value="Atualizar"> <button class="btn text-center btn-primary ml-3 mt-0" href="./controler/controlerBebida.php?opcao=2">Cancelar</button>
                           

                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

<?php include_once './include/rodape.php'; ?>
