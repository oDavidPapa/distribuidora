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
            <table id="tabela" class="table table-hover table-bordered">
                <thead class="bg-gradient-primary text-white">
                    <tr>
                        <th>#</th>
                        <!--<th>Código</th>-->
                        <th>Data</th>
                        <th>Frete</th>
                        <th>Total</th>
                        
                    </tr>
                </thead>
                
                <tbody>

                <?php
                    $cont = 1;
                    foreach ($compras as $compra) {
                        echo "<tr class='clickable' style='cursor: pointer;' data-toggle='collapse' data-target='#expandir$cont' aria-expanded='false' aria-controls='#expandir$cont'>";
                        echo "<th scope='row'>" . $cont . "</th>";
                        echo "<td>" . formatarData(strtotime($compra->dataCompra)) . "</td>";
                        echo "<td>R$ " . number_format($compra->valorFrete, 2, ',', '.') . "</td>";
                        echo "<td>R$ " . number_format($compra->valorTotal, 2, ',', '.') . "</td>";
                        echo "</tr>";
                       
                ?>

                </tbody>    
                
                
                <tbody class="collapse" id="expandir<?php echo $cont ?>">
                    <?php
                    $itens = $compraDAO->getItens($compra->idCompra);
                    foreach ($itens as $it) {
                        echo "<tr class='table-info'>";
                        echo "<td></td>";
                        
                        echo "<td>";
                        $bebida = $bebidaDAO->getBebida($it->getIdBebida());
                        echo $bebida->nome;
                        echo "</td>";

                        echo "<td>";
                        echo " Quantidade: " . $it->getQuantidade();
                        echo "</td>";

                        echo "<td>";
                        echo " Valor: R$ " . number_format($it->getValorItem(), 2, ',', '.');
                        echo "</td>";

                        echo "</tr>";
                        
                    }
                    ?>
                </tbody>

                
                <?php
                    $cont ++;
                    }
                ?>

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