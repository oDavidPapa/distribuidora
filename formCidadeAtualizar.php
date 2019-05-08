<html>
<head>
    <title>Atualização de Cidades</title>
    <h2 align="center">Atualizacao de Cidades</h2>
</head>

<body>
  <center>
    
    <?php
        session_start();
        $cidade = $_SESSION['cidade'];
    ?>

    <p>
    <!--tirar o s de controlers -->
    <form action="controler/controlerCidade.php">
        <input type="hidden" size="3" name="popcao" value="5">
        
        </p> ID da Cidade: <input type="text" size = "11" required = "required" name="pIdCidade" value="<?php echo $cidade->idCidade?>"readonly>
        </p> Nome da Cidade: <input type="text" size = "30" required = "required" name="pCidade" value="<?php echo $cidade->cidade?>">
        </p> Estado: <input type = "text" size = "2" required = "required" name = "pEstado" value="<?php echo $cidade->estado?>">
        </p> CEP: <input type = "text" size = "9" required = "required" name = "pCEP" value="<?php echo $cidade->CEP?>">
        </p> Valor do Frete/Volume: <input type = "text" size = "9" required = "required" name = "pValorFrete" value="<?php echo $cidade->valorFreteVolume?>">
        
        </p> <input type = "submit" value = "ATUALIZAR">
        <input type = "reset" value = "CANCELAR">
    </form>
  </center>

</body>
</html>