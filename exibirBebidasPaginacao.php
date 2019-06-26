<?php
    session_start();
    $lista = $_SESSION['bebidas'];
    $numPaginas = $_REQUEST['paginas'];

    // ----- OBS: FALTA LINCAR ESSA PAGINA PRA APARECER AS BEBIDAS PAGINADAS ------

?>

<?php include_once './include/cabecalho.php'; ?>



<body>

    <?php
       if (isset($_SESSION['usuario'])) {
        if ($_SESSION['usuario']->email == 'admin' && $_SESSION['usuario']->senha == 'admin') {
            include_once './include/menuAdmin.php';
        } else {
            include_once './include/menuNavegacaoLogado.php';
        }
    } else {
        include_once './include/menuNavegacao.php';
    }
    ?>

<body>

    <div class="container py-5 mb-5 text-center">
        <h4 class="text-center text-muted font-italic">Bebidas Cadastradas</h4>
        <table id="tabela" class="table table-striped table-bordered">


            <div class = "form-group input-group">
                <span class = "input-group-addon"><i class ="glyphicon glyphicon-search"></i></span>
                <input name="consulta" id="consulta" placeholder="Buscar..." type="text" class="form-control">
            </div>
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Volume (L/ml)</th>
                    <th>Preco(R$)</th>
                    <th>Quantidade no Estoque</th>
                    <th>Fabricante</th>
                    <th></th>
                    <th></th>      
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($lista as $bebida) {

                    echo "<tr align='center'>";
                    echo "<td>" . $bebida->idBebida . "</td>";
                    echo "<td>" . $bebida->nome . "</td>";
                    echo "<td>" . $bebida->volume . "</td>";
                    echo "<td>" . $bebida->preco . "</td>";
                    echo "<td>" . $bebida->quantidadeEstoque . "</td>";
                    echo "<td>" . $bebida->fabricante . "</td>";

                    echo "<td><a href='controler/controlerBebida.php?opcao=3&idBebida=" . $bebida->idBebida . "'><img src='imagens/editar.png'></a>&nbsp;";
                    echo "<td><a href='controler/controlerBebida.php?opcao=4&idBebida=" . $bebida->idBebida . "'><img src='imagens/excluir.png'></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <!--FILTRANDO OS DADOS NA TABELA-->
    <script>
        $(document).ready(function () {
            $("#consulta").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#tabela tbody tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
        <div>
            <?php
                for($i = 1; $i <= $numPaginas; $i++){
            ?>
            
                <a href="controler/controlerBebida.php?opcao=6&pagina=<?php echo $i ?>"><?php echo $i ?></a>
        
            <?php
                }     
            ?>       
        </div>
</body>





<?php include_once './include/rodape.php'; ?>