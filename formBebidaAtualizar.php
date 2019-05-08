<html>
<head>
    <title>Atualização de Bebidas</title>
    <h2 align="center">Alteracao de Clientes</h2>
</head>

<body>
  <center>
    
    <?php
        session_start();
        $bebida = $_SESSION['bebida'];
    ?>

    <p>
    <form action="controler/controlerBebida.php">
        <input type="hidden" size="3" name="popcao" value="5">
        
        </p> Numero da Bebida(ID) : <input type="text" size="11" required="required" name="pIdBebida" value="<?php echo $bebida->idBebida?>"readonly>
        </p> Nome : <input type="text" size = "50" required = "required" name="pNome" value="<?php echo $bebida->nome?>">
        </p> Volume: <input type="text" size = "7" required = "required" name="pVolume" value="<?php echo $bebida->volume?>">
        </p> Preco: <input type="text" size = "10" required = "required" name="pPreco" value="<?php echo $bebida->preco?>">
        </p> Quantidade em Estoque: <input type = "text" size = "11" required = "required" name = "pQdeEstoque" value="<?php echo $bebida->quantidadeEstoque?>">
        </p> Fabricante da Bebida: <input type = "text" size = "30" required = "required" name = "pFabricante" value="<?php echo $bebida->fabricante?>">
        </p> <input type = "submit" value = "ATUALIZAR">
        <input type = "reset" value = "CANCELAR">
    </form>
  </center> 
</body>
</html>