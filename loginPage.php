<?php include_once './include/cabecalho.php'; ?>

<body>

    <?php include_once './include/menuNavegacao.php'; ?>

    <div class="container">

        <div class="row mb-5 pt-5">

            <div class=" col-md-5 offset-md-3">
                <div class="card text-center">
                    <div class="card-body">
                        <h4 class="card-title text-center mb-4">Login</h4>
                        <form>
                            <div class="form-group mb-3">
                                <!--<h6 class="text-muted"><label for="email">Email</label></h6> -->
                                <input type="text" class="form-control" id="emailInput" placeholder="E-mail">
                            </div>
                            <div class="form-group mb-3">
                                <!--<h6 class="text-muted"><label for="formGroupExampleInput2">Senha</label></h6>-->
                                <input type="password" class="form-control" id="senhaInput" placeholder="Senha">
                            </div>
                            
                            <button class="btn texte-center btn-primary btn-lg pt-0 pb-0" href='#'>Entrar</button>

                        </form>

                        <div class="card-footer bg-white mt-3 pt-2">
                            <p class="text-muted">Não possui conta?</p>
                            <a class="card-link mt-0" href="#"> Cadastrar </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>



</body>