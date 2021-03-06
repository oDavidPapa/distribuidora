<?php
include_once './include/cabecalho.php';
session_start();
$lista = $_SESSION['listaBebidas'];
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
    <div class="row mb-5 pt-4 mr-2 ml-2">

        <?php
        foreach ($lista as $bebida) {
            if ($bebida->quantidadeEstoque > 100) {
                ?>


                <div class="col-sm-3 my-2">
                    <div class="card ">
                        <div class="card-body">
                            <img class="card-img-top" src="imagens/<?php echo "$bebida->idBebida" ?>.jpg">
                            <h6  class="card-title text-center"><?php echo "$bebida->nome, $bebida->volume ml" ?></h6>
                            <h6 class="card-subtitle text-center mb-2 text-muted"><?php echo "R$ $bebida->preco" ?></h6>

                            <p class="card-text text-center"><?php echo "$bebida->fabricante" ?></p>
                                                       
                            <p class="text-center"> <?php echo "<a href='./controler/carrinhoControler.php?&opcao=1&idBebida=" . $bebida->idBebida . "'><img src='imagens/btnComprar.png'></a>"; ?></p>

                                
                        </div>
                    </div>
                </div>



                <?php
            }
        }
        ?>
    </div>

</body>

<?php include_once './include/rodape.php'; ?>

