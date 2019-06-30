<?php include_once './include/cabecalho.php'; ?>

<body>

    <?php
    session_start();

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

    <div id="carouselSite" class="carousel slide pt-2 pb-2 mr-auto" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselSite" data-slide-to="0" class="active"></li>
            <li data-target="#carouselSite" data-slide-to="1"></li>
            <li data-target="#carouselSite" data-slide-to="2"></li>
            <li data-target="#carouselSite" data-slide-to="3"></li>

        </ol>
        <div class="carousel-inner center-block">
            <div class="carousel-item active offset-4">
                <img src="imagens/vinhos2.jpg" class="img-fluid d-block">
            </div>
            <div class="carousel-item offset-3">
                <img src="imagens/teste2.jpg" class="img-fluid d-block">
            </div>
            <div class="carousel-item offset-3">
                <img src="imagens/vinhos1.jpg" class="img-fluid d-block">
            </div>
            <div class="carousel-item offset-3">
                <img src="imagens/teste3.png" class="img-fluid d-block">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Avançar</span>
        </a>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h4 class="font-italic text-muted">Distribuidora de Bebidas Alegrense</h4>
                <p>Fundada em 2019 pelos alunos de Sistemas de Informação da Universidade Federal do Espírito Santo - UFES, a Distribuidora de Bebidas Alegrense fornece serviços para diversas cidades do estado, com o diferencial do comércio eletrônico, facilidando assim a vida dos clientes na hora de adquirir nossos produtos.</p>

            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="col-5">
            <h5 class="font-italic text-center">Nossos Produtos</h5>
            <p class="text-justify">Os produtos variam entre bebidas alcóolicas e não alcóolicas de diversas marcas já consolidadas no mercado brasileiro e internacional, atendendo a todos os públicos. Nossa equipe é responsável por suprir grande parte da demanda dos comércios do município de Alegre - ES, e conta também com uma considerável fatia do mercado do Estado.
                Nosso atendimento fácil e personalizado garante total satisfação de nossos clientes, sejam eles empresas ou pessoas físicas buscando o melhor para seu evento de grande e médio porte. <a class="text-truncate" href="./controler/carregandoProduto.php">Adquirir nossos produtos.</a></p>
        </div>
        <div class="offset-6">
            <h5 class="font-italic text-center">Marcas</h5>
            <p class="text-justify">Trabalhamos em conjunto com as maiores produtoras de bebidas do Brasil e do Mundo, prezamos pela qualidade de nossos serviços e produtos, por isso escolhemos marcas já consolidadas no mercado para que nossos clientes se sintam seguros na hora de contar com nossa equipe.
                Entre elas podemos destacar: <i>Antartica, Brahma, Budweiser, Corona, Skol, Stella Artois, Red Bull, Bacardi, Jhonnie Walker, Smirnoff, Coca Cola, Do Bem</i>, entre outras.<br>
                <br>Para mais informações acesse: <a class="text-truncate" href="marcas.php">Marcas.</a></p>
        </div>
        <div class="col-5" id="representantes">
            <h5 class="font-italic text-center">Representantes</h5>
            <p class="text-justify">Atuamos na região sudeste do país, a expectativa é que possamos expandir os negócios para todas as regiões brasileiras. Nosso foco atual estão nos Estados do Rio de Janeiro, Espírito Santo e Minas Gerais, com representantes nas seguintes cidades:<br> <b><br>Espírito Santo:</b> Alegre, Vitória, Linhares <br><b>Rio De Janeiro: </b>
                Rio de Janeiro, Niterói, Barra da Tijuca<br><b>Minas Gerais:</b> Belo Horizonte, Ipatinga, São Lourenço <br>
                <br>
                Para mais informações: <a class="text-truncate" href="#contato">Entre em contato conosco.</a></p></p>
        </div>

        <div class="offset-6" id="contato">
            <h5 class="font-italic text-center">Contatos</h5>
            <table class="text-center">
                <tr>
                    <th>Espírito Santo</th>
                    <th>Rio de Janeiro</th>
                    <th>Minas Gerais</th>
                </tr>
                <tr>
                    <td >
                        Telefone: (27) 3203-9999 &nbsp;<br>
                        Wpp: (27) 9 9999 9999 &nbsp;<br>
                    </td>

                    <td>
                        Telefone: (22) 3204-9999&nbsp;<br>
                        Wpp: (22) 9 9999 9998&nbsp;<br>
                    </td>
                    <td>
                        Telefone: (31) 3205-9999&nbsp;<br>
                        Wpp: (31) 9 9999 9997&nbsp;<br>
                    </td>
                </tr>
            </table>

            <br>
            <p class="text-center"> E-mail: alegre@distribuidora.com</p>
            &nbsp;&nbsp;<img src="imagens/fb.png"> \distAlegrense&nbsp;&nbsp; <img src="imagens/tt.png"> \distAlegrense &nbsp;&nbsp;<img src="imagens/inst.png">  \distAlegrense


        </div>
    </div>

    <div class="container my-5" id="representantes">

    </div>


</body>

<?php include_once './include/rodape.php'; ?>
