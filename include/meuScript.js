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
   
   if (senha != senha2){
      if(senha.length < 6){
         //erro = document.getElementById('erroSenha');
         //erro.innerHTML = "<p>A senha deverá conter no mínimo 6 caracteres!</p>";
         //return false;
      }else if(senha.length > 8){
         //erro = document.getElementById('erroSenha2');
         //erro.innerHTML = "<p>A senha deverá conter no máximo 8 caracteres!</p>";
         //return false;
      }
      erro = document.getElementById('erroSenha');
      erro.innerHTML = "<p>A senha deverá conter no mínimo 6 caracteres e no máximo 8!</p>";
      document.form1.senha.focus();
      return false;
   }else{
      erro = document.getElementById('erroconfi');
      erro.innerHTML = "<p>Confirmação de Senha Incorreta!</p>";
      document.form1.senha2.focus();
      return false;   
   }
}

// ----- PARA FAZER OS CAMPOS SEREM OBRIGATÓRIOS ------!
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
   if (((tecla >= 32) && (tecla <= 44)) || ((tecla >= 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('email');
      erro.innerHTML = "<p>E-mail Invalido! Informe o email no padrão correto!</p>";
      document.form1.email.focus();
      return false;
   }else{
      return true;
   }
}

//---------- COMEÇA AQUI A VALIDAÇÃO DO FORMULÁRIO DE CADASTRO DE BEBIDAS ------------

function validacaoObrigatorio(){
   codigo = document.form2.idBebida.value;
   bebida = document.form2.nome.value;
   volume = document.form2.volume.value;
   preco = document.form2.preco.value;
   fabricante = document.form2.fabricante.value;
   qntdestoque = document.form2.quantidadeEstoque.value;
   
   
   if ((codigo == "") || (bebida == "") || (volume == "") || (preco == "") || (fabricante == "") || (qntdestoque == "")){
      
      if (codigo == ""){
         erro = document.getElementById('campo1');
         erro.innerHTML = "<p>Favor preencher o campo Codigo da Bebida acima!</p>";
         document.form2.idBebida.focus();
         
      }else if(bebida == ""){
         erro = document.getElementById('campo2');
         erro.innerHTML = "<p>Favor preencher o campo Nome da Bebida acima!</p>";
         document.form2.nome.focus();
      
      }else if (volume == ""){
         erro = document.getElementById('campo3');
         erro.innerHTML = "<p>Favor preencher o campo Volume acima!</p>";
         document.form2.volume.focus();   
      
      }else if (preco == ""){
         erro = document.getElementById('campo4');
         erro.innerHTML = "<p>Favor preencher o campo Preco acima!</p>";
         document.form2.preco.focus();
      
      }else if (fabricante == ""){
         erro = document.getElementById('campo5');
         erro.innerHTML = "<p>Favor preencher o campo Fabricante acima!</p>";
         document.form2.fabricante.focus();
      
      }else if (qntdestoque == ""){
         erro = document.getElementById('campo6');
         erro.innerHTML = "<p>Favor preencher o campo Quantidade no Estoque acima!</p>";
         document.form2.quantidadeEstoque.focus();
      }
      return false;
   }else{
      return true;
   }
}

function tamanhocodigo(e){
  codigo = document.form2.idBebida.value;
  var tecla = (window.event)?event.keyCode:e.which;
   
   if((codigo.length == 7) || ((tecla >= 32) && (tecla <= 44)) || ((tecla >= 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('cod');
      erro.innerHTML = "<p>O código deverá ter 7 dígitos, incluindo números e letras!</p>";
      document.form2.idBebida.focus();
      return false;
   }else{
      return true;
   }
}

function somenteNumeroVolume(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('vol');
         erro.innerHTML = "<p>Volume Incorreto! Informe o volume em ml. Dica: 1 l corresponde a 1.000 ml</p>";
         document.form2.volume.focus();
         return false;
      }
   }
}

function somenteNumeroPreco(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('preco');
         erro.innerHTML = "<p>Preço Incorreto! Dica: 20.50</p>";
         document.form2.preco.focus();
         return false;
      }
   }
}

function somenteLetraNome(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p>Nome Incorreto! Digite somente letras.</p>";
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

function somenteLetraFabricante(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('fabricante');
      erro.innerHTML = "<p>Fabricante Incorreto! Digite somente letras.</p>";
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



 