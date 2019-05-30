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
?>
