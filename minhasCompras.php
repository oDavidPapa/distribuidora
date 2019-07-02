<?php
session_start();
$usuario = $_SESSION['usuario'];
error_reporting(0); // PARA SUMIR OS WARNINGs
?>

<?php
include_once './include/cabecalho.php';
include_once './model/Compra.php';
include_once './dao/ClienteDAO.php';
include_once './dao/CompraDAO.php';
include_once './model/ItemCompra.php';
include_once './dao/BebidaDAO.php';

$clienteDAO = new ClienteDAO();
$compras = $clienteDAO->getCompras();
$compraDAO = new CompraDAO();
$bebidaDAO = new BebidaDAO;

function formatarData($pData) {
    return date('d/m/Y', $pData);
}
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

<body>
    <div class="container py-4 mb-2 text-center">
        <h4 class="text-center text-muted font-italic">Minhas Compras</h4>

    </div>

    <?php
    if (sizeof($compras) > 0) {
        ?>
        <div class="container mb-4 text-center">
            <table id="tabela" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <!--<th>Código</th>-->
                        <th>Data</th>
                        <th>Frete</th>
                        <th>Total</th>
                        <th></th>
                        <!--<th></th>-->      
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $cont = 1;
                    foreach ($compras as $compra) {
                        echo "<tr>";
                        echo "<td>" . $cont . "</td>";
                        //echo "<td>" . $compra->idCompra . "</td>";
                        echo "<td>" . formatarData(strtotime($compra->dataCompra)) . "</td>";
                        echo "<td>R$ " . number_format($compra->valorFrete, 2, ',', '.') . "</td>";
                        echo "<td>R$ " . number_format($compra->valorTotal, 2, ',', '.') . "</td>";
                        ?>
                    <td><a data-toggle="collapse" href="#expandir<?php echo $cont ?>" aria-expanded="false" aria-controls="multiCollapseExample">Detalhes</a></td>
                    <tr>
                        <td class="collapse multi-collapse text-justify" colspan="4" id="expandir<?php echo $cont ?>">

                            <?php
                            $itens = $compraDAO->getItens($compra->idCompra);
                            foreach ($itens as $it) {
                                echo $it->getIdItem() . " - ";
                                $bebida = $bebidaDAO->getBebida($it->getIdBebida());
                                echo $bebida->nome;
                                echo "<br>Quantidade: " . $it->getQuantidade();
                                echo "<br>Valor: " . $it->getValorItem();
                                echo "<br>";
                            }
                            ?>
                    </tr>
                    </td>

                    <tr>

                        <?php
                        echo "</tr>";
                        $cont ++;
                    }
                    ?>
                    </tbody>
            </table>
            <br><br><br><br><br><br><br><br>
        </div>
        <?php
    } else {
        echo "<div class='container'>";
        echo "<div class='py-4 '>";
        echo "<h4 class='text-center text-muted'><img src='imagens/ops.png'> Ops... Você ainda não possui compras!</h4>";
        echo "<br><h5 class='text-center'><a href='controler/carregandoProduto.php' style='text-decoration:none'><img src='imagens/primeiraCompra.png'>&nbsp;&nbsp;Realizar Compras</a></h5>";
        echo "<br><br><br><br><br>";
        echo "</div></div>";
    }
    ?>

</div>
</body>





<?php include_once './include/rodape.php';
?>