<?php include_once './include/cabecalho.php'; ?>

<?php
include_once './model/ItemCompra.php';
include_once './dao/BebidaDAO.php';
include_once './model/Bebida.php';

session_start();
?>

<body>

    <?php
    if (isset($_SESSION['usuario'])) {
        include_once './include/menuNavegacaoLogado.php';
    } else {
        include_once './include/menuNavegacao.php';
    }

    if (isset($_REQUEST['status']) && $_REQUEST['status'] == 1) {
        echo "<div class='container py-5 pb-5'>";
        echo "<div class='py-4 '>";
        echo "<h4 class='text-center text-muted'><img src='imagens/ops.png'> Ops... Você ainda não possui itens no carrinho!</h4>";
        echo "<br><h5 class='text-center'><a href='controler/compraControler.php' style='text-decoration:none'><img src='imagens/adicionarItens.png'>Adicionar Itens</a></h5>";
        echo "</div>";
        echo "</div>";
    } else {

        $carrinho = $_SESSION['carrinho'];
        ?>

        <div class="container py-5 mb-5 text-center">
            <h4 class="text-center text-muted font-italic">Carrinho de Compras</h4>
            <table id="tabela" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Qunatidade</th>
                        <th>Preço (R$)</th>
                        <th></th>      
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $bebidaDAO = new BebidaDAO();
                    $cont = 1;
                    foreach ($carrinho as $item) {
                       
                        $bebida = $bebidaDAO->getBebida($item->getIdBebida());
                        ?>
                        <tr align='center'>
                            <td> <?php echo $cont ?> </td>
                            <td> <?php echo "$bebida->nome, $bebida->volume"?> </td>
                            <td><input type="text" nome="quantidade" size="2">&nbsp;&nbsp;<a href="./controler/carrinhoControler.php?opcao=5&idBebida=<?php echo $bebida->idBebida ?>"><img src="imagens/confirmarPequeno.png"></a>
                                &nbsp;<a href="#"><img src="imagens/editarMenor.png"></a>
                            <td>(Qdt x Preço do Produto): <?php echo $item->getValorItem()?></td>
                            <td><a href="controler/carrinhoControler.php?opcao=2&index=<?php echo ($cont - 1) ?> "><img src="imagens/excluir.png"></a></td>
                        </tr>                        

                        <?php
                        $cont ++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <!--FILTRANDO OS DADOS NA TABELA-->
    <?php } ?>
</body>





<?php include_once './include/rodape.php'; ?>
