<?php

include_once('../dao/AutenticacaoDAO.php');


session_start();

if (isset($_REQUEST['manterConectado'])) {
    $manterConectado = $_REQUEST['manterConectado'];
} else {
    $manterConectado = 'off';
}

$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];


$autentica = new AutenticacaoDAO();
$validado = $autentica->autenticar($login, $senha);


if (!$validado) {
    
   // echo "<script type='javascript'>alert('Email enviado com Sucesso!');";
   // echo "javascript:window.location='../loginPage.php';</script>";

    header("Location: ../loginPage.php");
    //echo "<script>alert('Email ou Senhas Incorretas!')</script>";
    
} else if ($validado && $manterConectado == 'on') {
    $_SESSION['lembrarUsuario'] = $validado;
    $usuario = $autentica->getUsuario($login, $senha);
    $_SESSION['usuario'] = $usuario;

    //echo "USUARIO LOGADO E LEMBRADO!";
    header("Location: ../index.php");
} else {
    $usuario = $autentica->getUsuario($login, $senha);
    $_SESSION['usuario'] = $usuario;
    //echo "USUÁRIO LOGADO MAS NÃO SALVO";
    header("Location: ../index.php");
}

?>

