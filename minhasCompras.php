<?php
session_start();
$usuario = $_SESSION['usuario'];
?>

<?php
include_once './include/cabecalho.php';
include_once './model/Compra.php';
include_once './dao/ClienteDAO.php';

$clienteDAO = new ClienteDAO();
$compras = $clienteDAO->getCompras();

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

    <div class="container py-5 mb-5 text-center">
        <h4 class="text-center text-muted font-italic">Informações das compras</h4>
        <table id="tabela" class="table table-striped table-bordered">


    </div>
<thead>
    <tr>
        <th>Código</th>
        <th>Data</th>
        <th>Frete</th>
        <th>Total</th>
        <th></th>
        <!--<th></th>-->      
    </tr>
</thead>
<tbody>

    <?php
    foreach ($compras as $compra) {
        echo "<tr align='center'>";
        echo "<td>" . $compra->idCompra . "</td>";
        echo "<td>" . formatarData(strtotime($compra->dataCompra)) . "</td>";
        echo "<td>R$ " . number_format($compra->valorFrete, 2, ',', '.') . "</td>";
        echo "<td>R$ " . number_format($compra->valorTotal, 2, ',', '.') . "</td>";

        echo "<td>Visualizar</td>";
        echo "</tr>";
    }
    ?>
</tbody>
</table>
</div>

</body>





<?php include_once './include/rodape.php'; ?>