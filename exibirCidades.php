<?php
    /*include_once ('topo.inc');*/

    session_start();
    $lista = $_SESSION['cidades'];
?>

<html>

<head>
    <title>Exibicao de Cidades</title>

</head>

<body>
    <center>
        <h1 align = "center">Cidades Cadastradas</h1>
        <!--<font face="Verdana">-->
        <table cellspacing="10" cellpadding="0" frame="void" width="50%">
            <tr>
                <th>ID</th>
                <th>Cidade</th>
                <th>Estado</th> 
                <th>CEP</th>
                <th>Valor do Frete/Volume</th>
                <th>Operacao de Alterar</th>
                <th>Operacao de Excluir</th>      
            </tr>
            <?php
                foreach ($lista as $cidade) {
                    echo "<tr align='center'>";
                    echo    "<td>" .$cidade->idCidade. "</td>";
                    echo    "<td>" .$cidade->cidade. "</td>";
                    echo    "<td>" .$cidade->estado. "</td>";
                    echo    "<td>" .$cidade->CEP. "</td>";
                    echo    "<td>" .$cidade->valorFreteVolume. "</td>";
                    echo    "<td><a href='controler/controlerCidade.php?popcao=3&idCidade=" .$cidade->idCidade. "'>Alterar</a>&nbsp;";
                    echo    "<td><a href='controler/controlerCidade.php?popcao=4&idCidade=" .$cidade->idCidade. "'>Excluir</a></td>";
                            /* tirar o s do controlers*/
                    echo "</tr>"; 
                }
            ?>
        <!--</font>-->    
        </table>
    </center>
</body>
</html>