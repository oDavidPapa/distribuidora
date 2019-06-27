function carregaCompras(){
   window.location.replace("controler/controlerMinhasCompras.php");
}

function mais(cont){
   var quantidade = parseInt(document.getElementById("quantidade"+cont).value);
   var idBebida= document.getElementById("idBebida"+cont).value;
   window.location.assign("controler/carrinhoControler.php?opcao=7&quantidade="+quantidade+"&idBebida="+idBebida);
}
function menos(cont){
   var quantidade = parseInt(document.getElementById("quantidade"+cont).value);
   var idBebida= document.getElementById("idBebida"+cont).value;
   window.location.assign("controler/carrinhoControler.php?opcao=8&quantidade="+quantidade+"&idBebida="+idBebida);
}

function validacao(){
   senha = document.form1.senha.value;
   senha2 = document.form1.confirmasenha.value;
   
   if (senha == senha2){
      if(senha.length < 6){
         //erro = document.getElementById('erroSenha');
         //erro.innerHTML = "<p>A senha deverá conter no mínimo 6 caracteres!</p>";
         //return false;
      }else if(senha.length > 8){
         //erro = document.getElementById('erroSenha2');
         //erro.innerHTML = "<p>A senha deverá conter no máximo 12 caracteres!</p>";
      }
      erro = document.getElementById('erroSenha');
      erro.innerHTML = "<p>A senha deverá conter no mínimo 6 caracteres e no máximo 8!</p>";
      document.form1.senha.focus();
      return false;
   }else{
      erro = document.getElementById('erroSenha2');
      erro.innerHTML = "<p>Confirmação de Senha Incorreta!</p>";
      document.form1.senha.focus();
      return false;   
   }
}

// ----- PARA FAZER O CARA PREENCHER TODOS OS CAMPOS -------!
/*function validacao2(){
   nome = document.form1.nome.value;
   doc = document.form1.cnpj.value;
   endereco = document.form1.endereco.value;
   email = document.form1.email.value;
   senha = document.form1.senha.value;
   confsenha = document.form1.confirmasenha.value;
   
   
   if ((nome == "") || (doc == "") || (endereco == "") || (email == "") || (senha == "") || (confsenha == "")){
      
      if (nome == ""){
         erro = document.getElementById('campo1');
         erro.innerHTML = "<p>Favor preencher o campo Nome acima!</p>";
         document.form1.nome.focus();
         
      }else if(doc == ""){
         erro = document.getElementById('campo2');
         erro.innerHTML = "<p>Favor preencher o campo Documento acima!</p>";
         document.form1.cnpj.focus();
      
      }else if (endereco == ""){
         erro = document.getElementById('campo3');
         erro.innerHTML = "<p>Favor preencher o campo Endereço acima!</p>";
         document.form1.endereco.focus();   
      
      }else if (email == ""){
         erro = document.getElementById('campo4');
         erro.innerHTML = "<p>Favor preencher o campo Email acima!</p>";
         document.form1.email.focus();
      
      }else if (senha == ""){
         erro = document.getElementById('campo5');
         erro.innerHTML = "<p>Favor preencher o campo Senha acima!</p>";
         document.form1.senha.focus();
      
      }else if (confsenha == ""){
         erro = document.getElementById('campo6');
         erro.innerHTML = "<p>Favor preencher o campo Confirma Senha acima!</p>";
         document.form1.confirmasenha.focus();
      }
      return false;
   }else{
      return true;
   }

}*/

function somenteNumero(e){
   tam = document.form1.cnpj.value;
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla > 47) && (tecla < 58)) && (tam.length < 14)){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('doc');
         erro.innerHTML = "<p>Documento Incorreto! Digite somente Numeros.</br>A quantidade de dígitos deverá ser no maximo 14!</p>";
         document.form1.cnpj.focus();
         return false;
      }
   }
}

function somenteLetra(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p>Nome Incorreto! Digite somente Letras.</p>";
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p>Documento Incorreto! Digite somente Numeros.</p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}

function verificaEmail(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if (tecla != 64){
      erro = document.getElementById('email');
      erro.innerHTML = "<p>E-mail Invalido! Informe o email no padrão correto!</p>";
      document.form1.email.focus();
      return false;
   }else{
      return true;
   }
}



 