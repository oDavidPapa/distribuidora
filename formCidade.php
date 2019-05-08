<html>
<head>
    <title>Cadastro de Cidades</title>
    <h2 align="center">Cadastro de Cidades</h2>
</head>

<body>
  <center>
    <p>
    <!--tirar o s do cotrolers-->
    <form action="controler/controlerCidade.php">
        </p> Nome da Cidade: <input type="text" size = "30" required = "required" name="pCidade">
        </p> Estado: <input type = "text" size = "2" required = "required" name = "pEstado">
        </p> CEP: <input type = "text" size = "9" required = "required" name = "pCEP">
        </p> Valor do Frete por Volume: <input type = "text" size = "9" required = "required" name = "pValorFrete">
        
        </p> <input type = "hidden" name="popcao" value = "1">

        </p> <input type = "submit" value = "CADASTRAR">
        <input type = "reset" value = "CANCELAR">
    </form>
  </center>

</body>

</html>