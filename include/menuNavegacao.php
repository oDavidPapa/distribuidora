<nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
    <div class="container">
        <a class="navbar-brand h1 mb-0" href="../distribuidora/index.php" >Distribuidora</a> <!--mb-0 : Margem 0 do componente -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
            <span class="navbar-toggler-icon"></span>
        </button> 

        <div class="collapse navbar-collapse" id="navbarSite">
            <ul class="navbar-nav mr-auto"> <!--mr-auto :  alinha a margem right da UL automáticamente -->
                <li class="nav-item">
                    <a class="nav-link text-white" href="../distribuidora/index.php?#representantes"> Representantes </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="../distribuidora/marcas.php"> Marcas </a>
                </li>
                <li class ="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-toggle="dropdown" id="navDrop">Produto</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../distribuidora/formCadastroBebida.php">Cadastrar</a>
                        <a class="dropdown-item" href="../distribuidora/controler/controlerBebida.php?opcao=2">Alterar/Excluir</a>
                        <!--<a class="dropdown-item" href="../distribuidora/controler/controlerBebida.php?opcao=6&pagina=1">Alterar/Excluir</a>-->
                        <a class="dropdown-item" href="../distribuidora/controler/carregandoProduto.php">Comprar</a>
                        
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#contato"> Contatos </a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto"> <!--ml-auto :  alinha a margem left da UL automáticamente --> 
                <li class ="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="../distribuidora/index.php?#contato" data-toggle="dropdown" id="navDrop">Social</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="../distribuidora/index.php?#contato">Facebook</a>
                        <a class="dropdown-item" href="../distribuidora/index.php?#contato">Twitter</a>
                        <a class="dropdown-item" href="../distribuidora/index.php?#contato">Instagram</a>
                    </div>
                </li>

            </ul>

            <!--
            <form class="form-inline ml-5">
                <input class="form-control ml-5 mr-2" type="search" placeholder="Buscar...">
                <button class="btn btn-dark" type="subtmit">Ok</button>
            </form>
            -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ml-1">
                    <a class="nav-link text-white" href="./loginPage.php"> Login </a>
                </li>
            </ul>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav ml-auto"> <!--mr-auto :  alinha a margem right da UL automáticamente -->
                    <li class="nav-item">
                        <!--<a class="nav-link mb-0"  href="#"> Carrinho </a>-->
                        <a href="../distribuidora/loginPage.php"><img src="../distribuidora/imagens/cesto.png"></a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>