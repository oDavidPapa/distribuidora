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
$status = $_REQUEST['status'];


$autentica = new AutenticacaoDAO();
$validado = $autentica->autenticar($login, $senha);

if ($status == 1) {
// // SE ENTRAR AQUI É PQ ELE VEIO CLICANDO PARA COMPRAR UM PRODUTO SEM ESTAR LOGADO,
//  ENTAO ELE DEVE RETORNAR PARA A PAGINA DE COMPRA!

    if (!$validado) {

        header("Location: ../loginPage.php?falhaLogin=1");
    } else if ($validado && $manterConectado == 'on') {
        $_SESSION['lembrarUsuario'] = $validado;
        $usuario = $autentica->getUsuario($login, $senha);
        $_SESSION['usuario'] = $usuario;

        //echo "USUARIO LOGADO E LEMBRADO!";
        header("Location:./carregandoProduto.php");
    } else {
        $usuario = $autentica->getUsuario($login, $senha);
        $_SESSION['usuario'] = $usuario;
        //echo "USUÁRIO LOGADO MAS NÃO SALVO";
        header("Location:./carregandoProduto.php");
    }
} else if ($status == 2) {
    if (!$validado) {

       header("Location: ../loginPage.php?falhaLogin=1");
    } else if ($validado && $manterConectado == 'on') {
        $_SESSION['lembrarUsuario'] = $validado;
        $usuario = $autentica->getUsuario($login, $senha);
        $_SESSION['usuario'] = $usuario;

        //echo "USUARIO LOGADO E LEMBRADO!";
        header("Location:./carregandoProduto.php");
    } else {
        $usuario = $autentica->getUsuario($login, $senha);
        $_SESSION['usuario'] = $usuario;
        //echo "USUÁRIO LOGADO MAS NÃO SALVO";
        header("Location:./carrinhoControler.php?opcao=3");
    }
} else {
    if (!$validado) {

       header("Location: ../loginPage.php?falhaLogin=1");
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
}
?>

