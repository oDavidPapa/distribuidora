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


    <div class="row mb-5 pt-4 mr-2 ml-2">
        <!-- col-sm-4 my-2 estava assim antes de mudar -->
        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">
                <div class="card-body">
                    <img class="card-img-top" src="imagens/Stella.jpg">
                    <h6  class="card-title text-center"><b>STELLA ARTOIS</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Tudo começou em Leuven, na Bélgica, em 1366 nasceu a cervejaria. <a data-toggle="collapse" href="#expandir" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a></td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir">E com ela, as bases para a qualidade e o sabor. Ambas características distiguem a Stella Artois até hoje das demais cervejas. Seis séculos depois, essa origem ainda é motivo de orgulho. 
                                É só olhar para qualquer garrafa de Stella Artois para ver que o símbolo da cervejaria Den Hoorn continua lá, estampado em cada rótulo.
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>
        <!-- col-sm-4 my-2 -->
        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">
                <div class="card-body">
                    <img class="card-img-top" src="imagens/johnnieWalker.jpg">
                    <h6  class="card-title text-center"><b>JOHNNIE WALKER</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">A história de Johnnie começa com a morte do seu pai. 
                                <a data-toggle="collapse" href="#expandir2" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir2">Um duro começo para um menino da área rural, mas John sempre teve algo de especial. 
                                Nessa época, o mundo não era o lugar mais amigável e John sabia disso. Não havia tempo para aflições. 
                                Ele tinha que ganhar a vida. Hoje, Johnnie Walker é a maior marca de whiskies do mundo e seu slogan é visto como um grito de guerra pelo progresso, 
                                coragem na adversidade, expressão alegre de otimismo e como o melhor conselho que você escutará na sua vida.
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">
                <div class="card-body">
                    <img class="card-img-top" src="imagens/cocacola.jpg">
                    <h6  class="card-title text-center"><b>COCA-COLA</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Em 1886, a Coca-Cola surgia em uma pequena farmácia de Atlanta. <a data-toggle="collapse" href="#expandir3" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a></td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir3">Em seu segundo século de existência, 
                                associada a momentos mágicos e especiais, a Coca-Cola tem a missão de levar sua magia para todo o planeta, tornando-se parte de vida de bilhões de pessoas.  
                                Em qualquer parte do mundo, você será capaz de achar uma Coca-Cola. 
                                A Coca-Cola é uma empresa de atuação global comprometida com os mercados locais. 
                            </td>
                        </tr>
                    </table>
                    </p>

                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">
                <div class="card-body">
                    <img class="card-img-top" src="imagens/brahma.jpg">
                    <h6  class="card-title text-center"><b>BRAHMA</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Começou quando Joseph, 
                                resolveu fabricar sua própria cerveja. <a data-toggle="collapse" href="#expandir4" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir4">Saboreada primeiramente entre amigos, sua cerveja acabou agradando a vários paladares e 
                                ficou tão famosa que ele, juntamente com os brasileiros Paul Fritz e Ludwig Mack, 
                                no dia 6 de setembro de 1888, inaugurou a Manufactura de Cerveja Brahma Villiger & Companhia, 
                                lançando comercialmente a marca BRAHMA CHOPP, 
                                disponível nas versões clara e escura, inicialmente vendida somente em barris de madeira, e hoje sendo vendidads pelo Brasil inteiro. 
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">
                <div class="card-body">
                    <img class="card-img-top" src="imagens/redbull3.jpg">
                    <h6  class="card-title text-center"><b>RED BULL</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Inspirado em bebidas funcionais, 
                                Dietrich fundou a Red Bull. <a data-toggle="collapse" href="#expandir5" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir5"> Em 1980 criou também a fórmula do Energético Red Bull. Desenvolveu o conceito de marketing exclusivo da Red Bull. Em 1987, no dia 1º de abril, 
                                o Red Bull Energy Drink foi vendido pela primeira vez em seu mercado natal, na Áustria. 
                                Isto não foi apenas o lançamento de um novo produto, como também, na verdade, 
                                o nascimento de uma categoria de produto completamente nova. Hoje, 
                                a Red Bull atua em 171 países e mais de 75 bilhões de latas do energético foi consumida até então. 
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">

                <div class="card-body">
                    <img class="card-img-top" src="imagens/absolut.jpg">
                    <h6  class="card-title text-center"><b>ABSOLUT VODKA</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">A Absolut Vodka foi lançada primeiro em 1979, na cidade de Nova York. 
                            <a data-toggle="collapse" href="#expandir6" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir6">Ela logo tornou-se tema de conversas na cidade e nos EUA, até alcançar o gosto mundial. Mas a receita por trás do sabor puro e natural da Absolut é bem mais antiga, 
                                já passou dos 40 anos. Para começar, foi um frasco de remédio do século 18, 
                                encontrado em um antiquário em Estocolmo, que inspirou a famosa garrafa da Absolut Vodka.
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">

                <div class="card-body">
                    <img class="card-img-top" src="imagens/budweiser.jpg">
                    <h6  class="card-title text-center"><b>BUDWEISER</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Fabricada nos EUA desde 1876. Inspirado pela cerveja Pilsner. <a data-toggle="collapse" href="#expandir7" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir7">A Cerveja Budweiser é uma Standard American Lager de sabor leve, 
                                cor clara e aroma discreto. As lascas de Beechwood, 
                                madeira especial utilizada no processo de fermentação e maturação da Budweiser, 
                                conferem um sabor equilibrado, marcante no início e suave no final. 
                                Ela não muda sua fórmula e nunca perde sua essência. Só Bud faz Bud. 
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">

                <div class="card-body">
                    <img class="card-img-top" src="imagens/vinhoGallo.jpg">
                    <h6  class="card-title text-center"><b>GALLO FAMILY</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Gallo não é apenas uma palavra em um rótulo. A proibição acabara de terminar. 
                            <a data-toggle="collapse" href="#expandir8" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir8">Ernest e Julio Gallo viajavam pelo país vendendo uvas da vinha da família. 
                                Mas o que eles realmente queriam fazer era começar uma vinícola. Por isso, devoraram livros sobre vinificação na biblioteca local de Modesto e aprenderam o ofício. 
                                Então eles pegaram emprestado da sogra de Ernest, porque é isso que as famílias fazem. Eles ajudam a transformar sonhos em realidade. 
                                E o sonho de Ernest e Julio aconteceu com a fundação da Vinícola E. & J. Gallo em 1933. 
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>

        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">

                <div class="card-body">
                    <img class="card-img-top" src="imagens/dobem.jpg">
                    <h6  class="card-title text-center"><b>DO BEM</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Tudo começou quando num daqueles dias de verão no Rio de Janeiro.
                            <a data-toggle="collapse" href="#expandir9" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir9">Quando o fundador da do bem™ chegou cansado do trabalho e deu sua tradicional passadinha na sua casa 
                                predileta de sucos, a BB Lanches no Leblon.Enquanto tomava seu suco de laranja espremido na hora, ele pensou: 
                                "Por que não podemos fazer um suco parecido com este?” As primeiras respostas estavam no Google. Depois de pesquisar bastante, ele resolveu largar seu emprego chato, 
                                enquadrou literalmente sua gravata e viajou pelo mundo conhecendo tecnologias e experimentando bebidas.
                                Ao ver o que era feito de mais legal e encontrar a tecnologia certa, ele teve certeza de que podia fazer melhor, 
                                juntando exatamente o que tinha imaginado: "Uma casa de sucos dentro de embalagens legais". 
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>


        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">

                <div class="card-body">
                    <img class="card-img-top" src="imagens/h2oh.png">
                    <h6  class="card-title text-center"><b>H2OH</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">A H2OH se originou nos EUA quando a PepsiCo resolveu lançar um produto.  
                            <a data-toggle="collapse" href="#expandir10" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir10">Comercializado em caráter experimental, na cidade de Denver, 
                                o novo refrigerante foi um verdadeiro fracasso e consequentemente retirado do mercado 
                                pouco depois. A H2OH! foi então guardada no catálogo de marcas registradas da PepsiCo. 
                                E por lá ficaria esquecida por alguns anos. Até que, em 2003, a tradicional 7 Up, também pertencente a PepsiCo, 
                                estava em processo de reformulação da fórmula para a produção de um novo refrigerante em virtude da expressiva queda nas vendas.
                                O primeiro protótipo, batizado internamente de Splash, foi um fracasso, 
                                foi então que a empresa decidiu afastar a bebida da categoria dos refrigerantes para aproximá-la das águas aromatizadas.
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>


        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">

                <div class="card-body">
                    <img class="card-img-top" src="imagens/Espumante.jpg">
                    <h6  class="card-title text-center"><b>GARIBALDI</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Situada em Garibaldi no coração da Serra Gaúcha - maior região vitivinícola do Brasil.  
                            <a data-toggle="collapse" href="#expandir11" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir11">Apresenta índices de crescimento superiores aos da média nacional. 
                                Resultado de uma história de investimentos, de profissionalização, de união e de uma trajetória que carrega em sua bagagem o trabalho e a vida de milhares de pessoas.
                                Com um quadro de 400 famílias associadas, investimos permanentemente em manutenção e melhoria dos processos produtivos e na qualidade dos produtos. 
                                Com uma área de 32 mil metros quadrados de construção e capacidade de processamento que ultrapassa os 20 milhões de quilos, 
                                utilizamos tecnologia e equipamentos europeus para a elaboração de nossos vinhos e espumantes.
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>


        <div class="col-sm-2 col-md-2 col-lg-2 my-2">
            <div class="card ">

                <div class="card-body">
                    <img class="card-img-top" src="imagens/cacildis.jpg">
                    <h6  class="card-title text-center"><b>BRASSARIA AMPOLIS</b></h6>
                    <p class="card-text text-center"><table>
                        <tr>    
                            <td align ="justify">Pra começar, o que é "Brassaria"?? Nome complicadis né!!  
                            <a data-toggle="collapse" href="#expandir12" aria-expanded="false" aria-controls="multiCollapseExample">Expandir</a>
                            </td>
                        </tr>
                        <tr>
                            <td align ="justify" class ="collapse multi-collapse" id="expandir12">Bom, "brassar" é o nome dado ao ato de se fazer o nosso mé (a cerveja). 
                                O processo se chama "brassagem". Brassaria é um termo que criamos e que nada mais é que o aportuguesamento de "Brasserie" ou de "Brewery". 
                                Onde se faz pão é padaria, onde se faz queijo é queijaria, onde se faz brassagens é brassaria. Tá claris?! 
                                Então vamos lá: Mais que uma cervejaria divertida e com a alma do Rio de Janeiro, 
                                este é um projeto feito com o carinho, a atenção e o cuidado de um filho em forma de homenagem ao seu pai, 
                                um dos maiores apreciadores de cerveja e um dos artistas mais queridos da história do Brasil.
                                Um selo de qualidade e criatividade que tem como missão elevar o nível das cervejas que se bebem no Brasil, de uma forma leve, bem-humorada e “sem frescuris” 
                                – marcas registradas do saudoso Mussum – e oferecer cervejas surpreendentes para bebedores cansados do banal e do sem graça.
                                Uma homenagem e um presente oficial da família do Mussum, para os apreciadores de boas risadas e belas cervejas. Saúdis! 
                            </td>
                        </tr>
                    </table>
                    </p>
                </div>
            </div>
        </div>


    </div>

</body>

<?php include_once './include/rodape.php'; ?>


