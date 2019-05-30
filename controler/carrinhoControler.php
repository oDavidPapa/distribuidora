<?php

include_once('../model/ItemCompra.php');
include_once('../dao/ItemCompraDAO.php');
include_once ('../dao/CompraDAO.php');
include_once('../model/Compra.php');
include_once('../dao/BebidaDAO.php');


$opcao = $_REQUEST['opcao'];

if ($opcao == 1) {
    session_start();
    $bebidaDAO = new BebidaDAO();
    $idBebida = $_REQUEST['idBebida'];

    if (isset($_SESSION['usuario'])) {
        
        $bebida = $bebidaDAO->getBebida($idBebida);
        $item = new ItemCompra();
        $item->setIdBebida($bebida->idBebida);
        
        if (!isset($_SESSION['carrinho'])) {
            $carrinho = array();
        } else {

            $carrinho = $_SESSION['carrinho'];
        }

        $carrinho[] = $item;
        $_SESSION['carrinho'] = $carrinho;
        header("Location:../exibirCarrinho.php");
    } else {
        header("Location:../loginPage.php");
    }
}
if ($opcao == 2) {
    session_start();
    $indice = $_REQUEST['index'];
    $carrinho = $_SESSION['carrinho'];

    unset($carrinho[$indice]);

    $_SESSION['carrinho'] = $carrinho;
    header("Location:../exibirCarrinho.php");
}


/*

  #Criando Compra;
  $compra = new Compra();
  $compraDAO = new CompraDAO();
  $compraDAO->inserirCompra($compra);

  //$compras = $compraDAO->getCompras();


  #Buscando os Dados da Bebida;
  $bebidaDAO = new BebidaDAO();
  $bebida = $bebidaDAO->getBebida($idBebida);
  $precoBebida = $bebida->preco;

  #Criando array de Itens;
  $itens = array();
  $item = new ItemCompra();
  $item->setIdBebida($idBebida);
  $item->setValorItem($precoBebida);
  $item->setIdCompra($idCompra)


 */
?>