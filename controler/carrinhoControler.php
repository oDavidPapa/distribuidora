<?php

include_once '../dao/BebidaDAO.php';
include_once '../model/Bebida.php';
include_once '../model/ItemCompra.php';


$opcao = $_REQUEST['opcao'];

if ($opcao == 1) {
    session_start();
    $bebidaDAO = new BebidaDAO();
    $idBebida = $_REQUEST['idBebida'];

    if (isset($_SESSION['usuario'])) {
        $quantidade = 1;

        $bebida = $bebidaDAO->getBebida($idBebida);
        $preco = (float) $bebida->preco;
        $item = new ItemCompra();
        $item->setIdBebida($bebida->idBebida);
        $item->setValorItem($preco * $quantidade);
        $item->setQuantidade($quantidade);

        if (!isset($_SESSION['carrinho'])) {
            $carrinho = array();
        } else {

            $carrinho = $_SESSION['carrinho'];
        }

        foreach ($carrinho as $it) {
            if ($it->getIdBebida() == $item->getIdBebida()) {
                $noCarrinho = true;
            } else {
                $noCarrinho = false;
            }
        }

        if ($noCarrinho) {
            foreach ($carrinho as $it) {
                if ($it->getIdBebida() == $item->getIdBebida()) {
                    $bebida = $bebidaDAO->getBebida($idBebida);
                    $it->setValorItem($it->getValorItem() + $bebida->preco);
                    $it->setQuantidade($it->getQuantidade() + 1);
                    $carrinho[] = $item;
                }
            }
        } else {
            $carrinho[] = $item;
        }

        $_SESSION['carrinho'] = $carrinho;
        header("Location:../exibirCarrinho.php");
    } else {
        $status = $_REQUEST['status'];
        header("Location:../loginPage.php?status=" . $status);
    }
}
if ($opcao == 2) {
    session_start();
    $indice = $_REQUEST['index'];
    $carrinho = $_SESSION['carrinho'];


    unset($carrinho[$indice]);
    sort($carrinho);

    $_SESSION['carrinho'] = $carrinho;


    header("Location:carrinhoControler.php?opcao=3");
}

if ($opcao == 3) {
    session_start();

    if (!isset($_SESSION['carrinho']) || sizeof($_SESSION['carrinho']) == 0) {
        header("Location:../exibirCarrinho.php?status=1");
    } else {
        header("Location:../exibirCarrinho.php");
    }
} if ($opcao == 7) {

    if ($_REQUEST['quantidade'] > 0) {
        $quantidade = $_REQUEST['quantidade'];
    } else {
        $quantidade = 1;
    }


    $idBebida = $_REQUEST['idBebida'];
    $bebidaDAO = new BebidaDAO();
    $bebida = $bebidaDAO->getBebida($idBebida);
    $preco = (float) $bebida->preco;

    session_start();
    $carrinho = $_SESSION['carrinho'];

    foreach ($carrinho as $item) {
        if ($item->getIdBebida() == $bebida->idBebida) {
            $item->setQuantidade($quantidade);
            $item->setValorItem($preco * $quantidade);
        }

        header("Location:carrinhoControler.php?opcao=3");
    }
}
?>