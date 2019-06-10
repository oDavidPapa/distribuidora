<?php

include_once('../model/Cliente.php');
include_once('../dao/ClienteDAO.php');


$opcao = $_REQUEST['opcao'];

if ($opcao == 1) {

    $nome = $_REQUEST['nome'];
    $cnpj = $_REQUEST['cnpj'];
    $endereco = $_REQUEST['endereco'];
    $idCidade = $_REQUEST['cidade'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    $cliente = new Cliente($nome, $cnpj, $endereco, $idCidade, $email, $senha);
    $clienteDAO = new ClienteDAO();
    $clienteDAO->inserirCliente($cliente);

    header("location: ../loginPage.php");
}
if ($opcao == 3) {

    $idCliente = $_REQUEST["idCliente"];

    $clienteDAO = new ClienteDAO();

    $cliente = $clienteDAO->getCliente($cliente);
    session_start();

    $_SESSION['cliente'] = $cliente;

    header("Location:../formAtualizaCliente.php");
} if ($opcao == 5) {
    
    $idCliente = $_REQUEST['idCliente'];
    $nome = $_REQUEST['nome'];
    $cnpj = $_REQUEST['cnpj'];
    $endereco = $_REQUEST['endereco'];
    $idCidade = $_REQUEST['cidade'];
    $email = $_REQUEST['email'];
    $senha = $_REQUEST['senha'];

    $cliente = new Cliente($nome, $cnpj, $endereco, $idCidade, $email, $senha);
    $cliente->setIdCliente($idCliente);
    $clienteDAO = new ClienteDAO();
    $clienteDAO->atualizarCliente($cliente);

    session_start();

    $_SESSION['cliente'] = $cliente;

    header("Location:../contaCliente.php");
}
?>
