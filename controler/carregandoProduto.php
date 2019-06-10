<?php

include_once('../model/Bebida.php');
include_once('../dao/BebidaDAO.php');

    $bebidaDAO = new BebidaDAO();
    $listaBebidas = $bebidaDAO->getBebidas();
    
    session_start();
    $_SESSION['listaBebidas'] = $listaBebidas;
    
    header("Location:../compraProduto.php");

?>