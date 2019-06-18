<?php

include_once '../model/Compra.php';
include_once '../dao/CompraDAO.php';
include_once '../dao/ClienteDAO.php';

$opcao = $_REQUEST['opcao'];


if ($opcao == 1) {

    $valorTotal = $_REQUEST['valorTotal'];
    $valorFrete = $_REQUEST['valorFrete'];

    session_start();

    $_SESSION['valorTotal'] = $valorTotal;
    $_SESSION['valorFrete'] = $valorFrete;

    header("Location: ../informacaoCompra.php");
} if($opcao == 2){
    session_start();
    
    $valorTotal = $_SESSION['valorTotal'];
    $valorFrete = $_SESSION['valorFrete'] ;
    $cliente = $_SESSION['usuario'];
    
    $clienteDAO = new ClienteDAO();
    $cidadeCliente = $clienteDAO->getCidade($cliente->idCidade);
    $carrinho = $_SESSION['carrinho'];
    $_SESSION['cidadeCliente'] = $cidadeCliente->cidade;
    $_SESSION['estadoCliente'] = $cidadeCliente->estado;
    
    
    $compra = new Compra($cliente->idCliente, $valorTotal, $valorFrete);
    $compraDAO = new CompraDAO();
    $compraDAO->incluirCompra($compra, $carrinho);
    
    $formaPagamento = $_REQUEST['formaPagamento'];
    
    if($formaPagamento == 1){
        header("Location: ../boleto/meuBoleto.php");
    } else {
        echo "Tipo de pagamento Indisponível";
    }
}
?>

