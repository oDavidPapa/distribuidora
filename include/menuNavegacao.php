<?php

?>

 <nav class="navbar navbar-expand-lg navbar-fixed-top navbar-dark bg-gradient-primary">
        <div class="container">
            <a class="navbar-brand h1 mb-0" href="#" >Distribuidora</a> <!--mb-0 : Margem 0 do componente -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button> 

            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto"> <!--mr-auto :  alinha a margem right da UL automáticamente -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Representantes </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Marcas </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Produtos </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Contatos </a>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto"> <!--ml-auto :  alinha a margem left da UL automáticamente --> 
                    <li class ="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="navDrop">Social</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Facebook</a>
                            <a class="dropdown-item" href="#">Twitter</a>
                            <a class="dropdown-item" href="#">Instagram</a>
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
                        <a class="nav-link" href="#"> Login </a>
                    </li>
                </ul>
                <div class="collapse navbar-collapse" id="navbarSite">
                    <ul class="navbar-nav ml-auto"> <!--mr-auto :  alinha a margem right da UL automáticamente -->
                        <li class="nav-item">
                            <a class="nav-link mb-0"  href="#"> Carrinho </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </nav>