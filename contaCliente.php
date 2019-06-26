<?php
session_start();
include_once ('dao/CidadeDAO.php');
$usuario = $_SESSION['usuario'];



$cidadeDAO = new CidadeDAO();
$cidade = $cidadeDAO->getCidade($usuario->idCidade);
?>

<?php include_once './include/cabecalho.php'; ?>



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
        <h4 class="text-center text-muted font-italic">Informações do Cliente</h4>
        <table id="tabela" class="table table-striped table-bordered">


            </div>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CNPJ/CPF</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th></th>
                    <!--<th></th>-->      
                </tr>
            </thead>
            <tbody>

                <?php
                

                    echo "<tr align='center'>";
                    echo "<td>" . $usuario->nome . "</td>";
                    echo "<td>" . $usuario->cnpj . "</td>";
                    echo "<td>" . $usuario->endereco . "</td>";
                    echo "<td>" . $cidade->cidade .", ".$cidade->estado. "</td>";

                    echo "<td><a href='controler/controlerCliente.php?opcao=3&idCliente=" .$usuario->idCliente ."'><img src='imagens/editar.png'></a>&nbsp;";
                    echo "</tr>";
                
                ?>
            </tbody>
        </table>
    </div>
        
</body>





<?php include_once './include/rodape.php'; ?>