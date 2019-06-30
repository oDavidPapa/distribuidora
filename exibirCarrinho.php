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
        if ($_SESSION['usuario']->email == 'admin' && $_SESSION['usuario']->senha == 'admin') {
            include_once './include/menuAdmin.php';
        } else {
            include_once './include/menuNavegacaoLogado.php';
        }
    } else {
        include_once './include/menuNavegacao.php';
    }


    if (isset($_REQUEST['status']) && $_REQUEST['status'] == 1) {
        echo "<div class='container py-5 pb-5'>";
        echo "<div class='py-4 '>";
        echo "<h4 class='text-center text-muted'><img src='imagens/ops.png'> Ops... Você ainda não possui itens no carrinho!</h4>";
        echo "<br><h5 class='text-center'><a href='controler/carregandoProduto.php' style='text-decoration:none'><img src='imagens/adicionarItens.png'>Adicionar Itens</a></h5>";
        echo "<br><br><br><br><br><br></div>";
        echo "</div>";
    } else {

        $carrinho = $_SESSION['carrinho'];
        $usuario = $_SESSION['usuario'];
        ?>

        <div class="container py-5 mb-1 text-center">
            <h4 class="text-center text-muted font-italic">Carrinho de Compras</h4>
            <table id="tabela" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço (R$)</th>
                        <th></th>      
                    </tr>
                </thead>
                <tbody>

    <?php
    $bebidaDAO = new BebidaDAO();
    $cont = 1;
    $volume = 0;
    $valorTotal = 0;
    foreach ($carrinho as $item) {

        $bebida = $bebidaDAO->getBebida($item->getIdBebida());
        ?>
                        <tr align='center'>
                            <td> <?php echo $cont ?> </td>
                            <td> <?php echo "$bebida->nome, $bebida->volume" ?> </td>

                            <td>
                                <input type="image" id="menos" onclick="menos(<?php echo $cont ?>)" src="imagens/menosPequeno.png">
                                &nbsp;<input class="form-control-sm col-xl-3" type="number" style="text-align:center" value="<?php echo $item->getQuantidade() ?>" id="quantidade<?php echo $cont ?>">
                                <input hidden="" value="<?php echo $bebida->idBebida ?>" id="idBebida<?php echo $cont ?>">
                                &nbsp;<input type="image" id="mais" onclick="mais(<?php echo $cont ?>)" src="imagens/addPequeno.png">                            

                            </td> 


                            <td >R$ <?php echo $item->getValorItem() ?></td> 

                            <td><a href="controler/carrinhoControler.php?opcao=2&index=<?php echo ($cont - 1) ?> "><img src="imagens/excluir.png"></a></td>
                        </tr>                        

        <?php
        $cont ++;
        $volume += $item->getQuantidade() * (int) $bebida->volume;

        $valorTotal += $item->getValorItem();
    }
    ?>
                <tfoot>
                <td colspan="3" align='right'>
                    Valor Parcial:
                </td>
                <td colspan="2" align='center'>
    <?php echo "R$ " . number_format($valorTotal, 2, ',', '.'); ?>
                </td>
                </tfoot>

                </tbody>
            </table>
            <p align="right"><a href="./controler/carregandoProduto.php"><img src="./imagens/botao_continuar_comprando.png"></a></p>
        </div>
    <div class="container text-center py-2" id="finalizarCompra">
            <h4 class="text-center text-muted font-italic">Detalhes do Pedido</h4>
            <table id="tabela" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Endereço</th>
                        <th>Valor Frete (R$)</th>
                        <th>Valor Produtos</th>
                        <th>Valor Total (R$)</th>

                    </tr>
                </thead>
                <tbody>
                <td>
    <?php echo $usuario->nome ?>
                </td>
                <td>
    <?php
    switch ($usuario->idCidade) {
        CASE 0:
            echo "Edereço Inválido, favor alterar sua cidade";
            break;
        CASE 1:
            echo "$usuario->endereco, Alegre, ES";
            break;
        CASE 2:
            echo "$usuario->endereco, Vitória, ES";
            break;
        CASE 3:
            echo "$usuario->endereco, Linhares, ES";
            break;
        CASE 4:
            echo "$usuario->endereco, Rio de Janeiro, RJ";
            break;
        CASE 5:
            echo "$usuario->endereco, Niterói, RJ";
            break;
        CASE 6:
            echo "$usuario->endereco, Barra da Tijuca, RJ";
            break;
        CASE 7:
            echo "$usuario->endereco, Belo Horizonte, MG";
            break;
        CASE 8:
            echo "$usuario->endereco, Ipatinga, MG";
            break;
        CASE 9:
            echo "$usuario->endereco, São Lourenço, MG";
            break;
    }
    ?>
                </td>
                <td>
    <?php
    switch ($usuario->idCidade) {
        CASE 1:
            $valor = ($volume * 0.9) / 1000;
            echo number_format($valor, 2, ',', '.');
            break;
        CASE 2:
            $valor = ($volume * 0.5) / 1000;
            echo number_format($valor, 2, ',', '.');
            break;
        CASE 3:
            $valor = ($volume * 0.7) / 1000;
            echo $valor;
            break;
        CASE 4:
            $valor = ($volume * 0.5) / 1000;
            echo number_format($valor, 2, ',', '.');
            break;
        CASE 5:
            $valor = ($volume * 0.7) / 1000;
            echo number_format($valor, 2, ',', '.');
            break;
        CASE 6:
            $valor = ($volume * 0.9) / 1000;
            echo number_format($valor, 2, ',', '.');
            break;
        CASE 7:
            $valor = ($volume * 0.5) / 1000;

            echo number_format($valor, 2, ',', '.');
            break;
        CASE 8:
            $valor = ($volume * 0.9) / 1000;
            echo number_format($valor, 2, ',', '.');
            break;
        CASE 9:
            $valor = ($volume * 0.7) / 1000;
            echo number_format($valor, 2, ',', '.');
            break;
    }
    ?>
                </td>
                <td>
    <?php echo number_format($valorTotal, 2, ',', '.'); ?>
                </td>
                <td>
    <?php
    $valorFinalCompra = $valorTotal + $valor;
    echo number_format($valorFinalCompra, 2, ',', '.');
    ?>
                </td>
                </tbody>
            </table>
            <p align="center"><a href="./controler/controlerCompra.php?opcao=1&valorTotal=<?php echo $valorTotal ?>&valorFrete=<?php echo $valor ?>"><img src="./imagens/finalizarCompra.png"></a></p>

        </div>

<?php } ?>


</body>

<?php include_once './include/rodape.php'; ?>
