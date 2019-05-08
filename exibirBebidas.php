<?php
    /*include_once ('topo.inc');*/

    session_start();
    $lista = $_SESSION['bebidas'];
?>

<html>

<head>
    <title>Exibicao de Bebidas</title>

</head>

<body>
    <center>
        <p>
        <h2 align = "center">Bebidas Cadastradas</h2>
        <!--<font face="Verdana">-->
        <!--ISSET pra usar em todos os exibir-->
        <table cellspacing="20" cellpadding="2" frame="void" width="60%">
            <tr>
                <th>BebidaNumero</th>
                <th>Nome</th>
                <th>Volume (L/ml)</th>
                <th>Preco(R$)</th>
                <th>Quantidade no Estoque</th>
                <th>Fabricante</th>
                <th>Operacao de Alterar</th>
                <th>Operacao de Excluir</th>      
            </tr>

            <?php
                
                foreach ($lista as $bebida) {
                   
                    echo "<tr align='center'>";
                    echo    "<td>" .$bebida->idBebida. "</td>";
                    echo    "<td>" .$bebida->nome. "</td>";
                    echo    "<td>" .$bebida->volume. "</td>";
                    echo    "<td>" .$bebida->preco. "</td>";
                    echo    "<td>" .$bebida->quantidadeEstoque. "</td>";
                    echo    "<td>" .$bebida->fabricante. "</td>";
                    
                    echo    "<td><a href='controler/controlerBebida.php?popcao=3&idBebida=" .$bebida->idBebida. "'>Alterar</a>&nbsp;";
                    echo    "<td><a href='controler/controlerBebida.php?popcao=4&idBebida=" .$bebida->idBebida. "'>Excluir</a></td>";
                    echo "</tr>"; 
                }  
            ?>
       <!-- </font>  -->  
        </table>
    </center>
</body>
</html>