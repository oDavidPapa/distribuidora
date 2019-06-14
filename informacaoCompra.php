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
        echo "<br><h5 class='text-center'><a href='controler/carregandoProduto.php' style='text-decoration:none'><img src='imagens/adicionarItens.png'>Adicionar Itens</a></h5>";
        echo "</div>";
        echo "</div>";
    } else {

        $carrinho = $_SESSION['carrinho'];
        $usuario = $_SESSION['usuario'];
        $valorTotal = $_SESSION['valorTotal'];
        $valorFrete = $_SESSION['valorFrete'];
        ?>

        <div class="container text-center py-4">
            <h4 class="text-center text-muted font-italic">Finalizar Pedido</h4>
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
                    echo number_format($valorFrete, 2, ',', '.');
                    ?>
                </td>
                <td>
                    <?php echo number_format($valorTotal, 2, ',', '.'); ?>
                </td>
                <td>
                    <?php
                    $valorFinalCompra = $valorTotal + $valorFrete;
                    echo number_format($valorFinalCompra, 2, ',', '.');
                    ?>
                </td>
                </tbody>
            </table>
            
            <p class="text-center"><a href="controler/carrinhoControler.php?opcao=3" class="btn btn-primary active" role="button" aria-pressed="true"> < Voltar ao carrinho</a></p>

        </div>
        <div class="container py-4">

            <div class="container-fluid">
                <h5 class="text-left font-italic text-muted">Forma de Pagamento: </h5>
                <form action="controler/controlerCompra.php"  class="form-control border-0 col-4">
                    <select class="form-control " name="formaPagamento">
                        <option value="1">Boleto</option>
                        <option value="2">Cartão de Crédito</option>
                        <option value="3">Débito em Conta</option>
                    </select><br>
                    <input type="hidden" name="opcao" value="2">
                    <p class="text-center"><input type="image" onclick="executar()" src="./imagens/botao_comprar2.png"></p>
                </form>

            </div>
            <div class="py-4">
                <img class="align-content-center" src="imagens/formasPagamento.jpg">
            </div>
        </div>


    <?php } ?>


</body>

<?php include_once './include/rodape.php'; ?>
