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
        echo "<h1 class='text-center text-muted'>CARRINHO VAZIO!</h1>";
        echo "<br><h2 class='text-center'>Realize Compras!</h1>";
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

                        echo "<tr align='center'>";
                        echo "<td>" . $cont . "</td>";
                        echo "<td>" . $bebida->nome . ", " . $bebida->volume . "</td>";
                        echo "<td><input type='text' nome='quantidade' size='2'>&nbsp;&nbsp;<a href='./controler/carrinhoControler.php?idItem=" . $item->getIdItem() . "&idBebida=" . $bebida->idBebida . "'><img src='imagens/confirmarPequeno.png'></a>&nbsp "
                        . "<a href='#" . $bebida->idBebida . "'><img src='imagens/editarMenor.png'></a>";
                        echo "<td>(Qdt x Preço do Produto)</td>";
                        echo"<td><a href='controler/carrinhoControler.php?opcao=2&index=" . ($cont - 1) . "'><img src='imagens/excluir.png'></a></td>";
                        echo "</tr>";
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
