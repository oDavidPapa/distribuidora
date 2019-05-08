<?php
 /* include_once ('topo.inc');*/
?>

<html>
<head>
    <title>Cadastro de Bebidas</title>
    <h2 align="center">Cadastro de Bebidas</h2>
</head>

<body>
  <center>
    <p>
    <form action="controler/controlerBebida.php" method="get">
        </p> Numero da Bebida(ID) : <input type="text" size="11" required="required" name="pIdBebida">
        </p> Nome : <input type="text" size = "50" required = "required" name="pNome">
        </p> Volume(L/ml): <input type="text" size = "7" required = "required" name="pVolume">
        </p> Preco(R$): <input type="text" size = "10" required = "required" name="pPreco">
        </p> Quantidade em Estoque: <input type = "text" size = "11" required = "required" name = "pQdeEstoque">
        </p> Fabricante da Bebida: <input type = "text" size = "30" required = "required" name = "pFabricante">
        
        </p> <input type = "hidden" name="popcao" value = "1">

        </p> <input type = "submit" value = "CADASTRAR">
        <input type = "reset" value = "CANCELAR">
    </form>
  </center> 
</body>
</html>