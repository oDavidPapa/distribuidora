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



    <div class="container">

        <div class="row mb-2 pt-4 pb-4">

            <div class=" col-md-6 offset-md-3">
                <div class="card text-center">
                    <div class="card-body ">
                        <h5 class="card-title text-muted mt-3 mb-3">Cadastro de Usuário</h5>

                        <form name="form1" action="controler/controlerCliente.php" onSubmit="return validacao();">
                            <h6 class="text-muted text-justify"><label for="email">Dados Pessoais:</label></h6>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="nomeInput"  name="nome" onKeypress="return somenteLetra(event);" onChange="campo1();" onChange="campoNome();"  placeholder="Nome">
                                <p align="left"><span id="campo1"></span></p>
                                <p align="left"><span id="nome"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="cnpjInput"  name="cnpj" onKeypress="return somenteNumero(event);" onChange="campo2();" onChange="campoDoc();"  placeholder="CNPJ ou CPF">
                                <p align="left"><span id="campo2"></span></p>
                                <p align="left"><span id="doc"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="enderecoInput" name="endereco" onKeypress="return somenteLetraNumero(event);" onChange="campo3();" onChange="campoEnde();" placeholder="Endereço. Ex: Rua, número, bairro">
                                <p align="left"><span id="campo3"></span></p>
                                <p align="left"><span id="endereco"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <select class="form-control" name="cidade">
                                    <option value="0">Selecione a cidade</option>
                                    <optgroup label="Espírito Santo">
                                        <option value="1">Alegre</option>
                                        <option value="2">Vitória</option>
                                        <option value="3">Linhares</option>
                                    </optgroup>
                                    <optgroup label="Rio de Janeiro">
                                        <option value="4">Rio de Janeiro</option>
                                        <option value="5">Niterói</option>
                                        <option value="6">Barra da Tijuca</option>
                                    </optgroup>
                                    <optgroup label="Minas Gerais">
                                        <option value="7">Belo Horizonte</option>
                                        <option value="8">Iptinga</option>
                                        <option value="9">São Lourenço</option>
                                    </optgroup>
                                </select>
                                <p align="left"><span id="campo7"></span></p>
                            </div>
                            <h6 class="text-muted text-justify"><label for="email">Informações site:</label></h6>
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" id="emailInput"  name="email" onKeypress="return verificaEmail(event);" onChange="campo4();" onChange="campoEmail();" placeholder="E-mail">
                                <p align="left"><span id="campo4"></span></p>
                                <p align="left"><span id="email"></span></p>
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" id="senhaInput" name="senha" onChange="campo5();" onChange="campoSenha();" placeholder="Senha">
                                <p align="left"><span id="campo5"></span></p>
                                <p align="left"><span id="erroSenha"></span></p>
                                
                                <!--<p><span id="erroSenha2"></span></p>-->
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" class="form-control" id="senhaInput2" name="confirmasenha" onChange="campo6();" onChange="campoConfiSenha();" placeholder="Confirmar Senha">
                                <p align="left"><span id="campo6"></span></p>
                                <p align="left"><span id="erroconfi"></span></p>
                                
                            </div>
                            <!--<p><span id="campo6"></span></p>-->
                            <div class="form-group mb-3">
                                <input type="hidden" class="form-control" value="1" name="opcao">
                            </div>
                            <input class="form-group btn texte-center btn-primary btn-lg btn-block mt-4 pt-0 pb-0" type="submit" value="Cadastar">
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>
</body>








<?php include_once './include/rodape.php'; ?>
