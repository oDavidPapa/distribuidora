<?php
    include_once('../model/Cidade.php');
    include_once('../dao/CidadeDAO.php');
    /*mudar esse ultimo include_once colocar CidadeDAO.php*/ 

    $opcao = (int)$_REQUEST["popcao"];

    if($opcao == 1){
        $cidade = new Cidade($_REQUEST["pCidade"],$_REQUEST["pEstado"],$_REQUEST["pCEP"],(float)$_REQUEST["pValorFrete"]);

        $cidadeDao = new CidadeDAO();

        $cidadeDao->incluirCidade($cidade);

        /* tirar o s do controlers*/
        header("Location:../controler/controlerCidade.php?popcao=2");
    }

    if($opcao == 2){
        $cidadeDao = new CidadeDAO();

        $lista = $cidadeDao->getCidades();

        session_start();
        $_SESSION['cidades'] = $lista;
        
        header("Location:../exibirCidades.php");
    }

    if($opcao == 3){
        $idCidade = (int)$_REQUEST["idCidade"];   

        $cidadeDao = new CidadeDAO();
        $cidade = $cidadeDao->getCidade($idCidade);

        session_start();

        $_SESSION['cidade'] = $cidade;

        header("Location: ../formCidadeAtualizar.php");
    }

    if($opcao == 4){
        $idCidade = (int)$_REQUEST["idCidade"];

        $cidadeDao = new CidadeDAO();
        $cidadeDao->excluirCidade($idCidade);

        /* tirar o s do controlers*/
        header("Location:../controler/controlerCidade.php?popcao=2");
    }

    if($opcao == 5){
        $cidade = new Cidade($_REQUEST["pCidade"],$_REQUEST["pEstado"],$_REQUEST["pCEP"],(float)$_REQUEST["pValorFrete"]);
        $cidade->setIdCidade((int)$_REQUEST["pIdCidade"]);
        
        $cidadeDao = new CidadeDAO();
        $cidadeDao->atualizarCidade($cidade);

        /* tirar o s do controlers*/
        header("Location:../controler/controlerCidade.php?popcao=2");
    }
?>    