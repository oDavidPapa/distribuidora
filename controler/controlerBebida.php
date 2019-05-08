<?php
    
    include_once('../model/Bebida.php');
    include_once('../dao/BebidaDAO.inc');

    $opcao = (int)$_REQUEST["popcao"];

    if($opcao == 1){
        $bebida = new Bebida($_REQUEST["pIdBebida"],$_REQUEST["pNome"],$_REQUEST["pVolume"],(float)$_REQUEST["pPreco"],(int)$_REQUEST["pQdeEstoque"],$_REQUEST["pFabricante"]);

        $bebidaDao = new BebidaDAO();

        //var_dump($bebida);
        $bebidaDao->incluirBebida($bebida);
        

        header("Location:../controler/controlerBebida.php?popcao=2");
    }

    if($opcao == 2){
        $bebidaDao = new BebidaDAO();

        $lista = $bebidaDao->getBebidas();

        session_start();
        $_SESSION['bebidas'] = $lista;
        
        header("Location:../exibirBebidas.php");
    }

    if($opcao == 3){
        $id = $_REQUEST["idBebida"];   

        $bebidaDao = new BebidaDAO();
        $bebida = $bebidaDao->getBebida($id);

        session_start();

        $_SESSION['bebida'] = $bebida;

        header("Location: ../formBebidaAtualizar.php");
    }

    if($opcao == 4){
        $id = $_REQUEST["idBebida"];

        $bebidaDao = new BebidaDAO();
        $bebidaDao->excluirBebida($id);

        header("Location:../controler/controlerBebida.php?popcao=2");
    }

    if($opcao == 5){
        $bebida = new Bebida($_REQUEST["pIdBebida"],$_REQUEST["pNome"],$_REQUEST["pVolume"],(float)$_REQUEST["pPreco"],(int)$_REQUEST["pQdeEstoque"], $_REQUEST["pFabricante"]);
        $bebida->setIdBebida($_REQUEST["pIdBebida"]);
        
        $bebidaDao = new BebidaDAO();
        $bebidaDao->atualizarBebida($bebida);

        header("Location:../controler/controlerBebida.php?popcao=2");
    }

?>    