<?php

include_once('../model/Bebida.php');
include_once('../dao/BebidaDAO.php');

$opcao = (int) $_REQUEST["opcao"];

if ($opcao == 1) {

    $idBebida = $_REQUEST['idBebida'];
    $nome = $_REQUEST['nome'];
    $volume = $_REQUEST['volume'];
    $preco = $_REQUEST['preco'];
    $fabricante = $_REQUEST['fabricante'];
    $quantidadeEstoque = $_REQUEST['quantidadeEstoque'];

    $bebida = new Bebida($idBebida, $nome, $volume, $preco, $quantidadeEstoque, $fabricante);
    $bebidaDao = new BebidaDAO();

    //var_dump($bebida);
    $bebidaDao->incluirBebida($bebida);
    echo "CADASTROU, VAI VER NO BANCO";

    header("Location:../controler/controlerBebida.php?opcao=2");
}

if ($opcao == 2) {
    $bebidaDao = new BebidaDAO();

    $lista = $bebidaDao->getBebidas();

    session_start();
    $_SESSION['bebidas'] = $lista;

    header("Location:../exibirBebidas.php");
}

if ($opcao == 3) {
    $id = $_REQUEST["idBebida"];

    $bebidaDao = new BebidaDAO();
    $bebida = $bebidaDao->getBebida($id);

    session_start();

    $_SESSION['bebida'] = $bebida;

    header("Location: ../formAtualizaBebida.php");
}

if ($opcao == 4) {
    $id = $_REQUEST["idBebida"];

    $bebidaDao = new BebidaDAO();
    $bebidaDao->excluirBebida($id);

    header("Location:../controler/controlerBebida.php?opcao=2");
}

if ($opcao == 5) {
    $idBebida = $_REQUEST['idBebida'];
    $nome = $_REQUEST['nome'];
    $volume = $_REQUEST['volume'];
    $preco = $_REQUEST['preco'];
    $fabricante = $_REQUEST['fabricante'];
    $quantidadeEstoque = $_REQUEST['quantidadeEstoque'];
    
    $bebida = new Bebida($idBebida, $nome, $volume, $preco, $quantidadeEstoque, $fabricante);
    //var_dump($bebida);
    $bebidaDao = new BebidaDAO();
    $bebidaDao->atualizarBebida($bebida);
    

    header("Location:../controler/controlerBebida.php?opcao=2");
}

    // ------ COMEÇA AQUI A PAGINAÇÃO CASO SEJA NECESSÁRIO ------
    // ------ SE PRECISAR SÓ DESCOMENTAR -----
    /*
    if($opcao == 6){
        $pagina = (int)$_REQUEST['pagina'];
        
        $bebidaDao = new BebidaDAO();
  
        $lista = $bebidaDao->getBebidasPaginacao($pagina);
        $numPaginas = $bebidaDao->getPagina();
  
        session_start();
        $_SESSION['bebidas'] = $lista;
  
        header("Location:../exibirBebidasPaginacao.php?paginas=".$numPaginas);
  
     }
  
     if($opcao == 7){
        
        $bebidaDao = new BebidaDAO();
        
        $bebidaDao->incluirVariasBebidas();
        
  
        header("Location:controlerBebida.php?popcao=6&pagina=1");
  
     }*/

?>    