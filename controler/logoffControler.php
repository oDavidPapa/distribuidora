<?php

$deslogado = $_REQUEST['logoff'];

if($deslogado == 'true'){
    session_start();
    session_destroy();
     header("Location: ../index.php");
}

?>