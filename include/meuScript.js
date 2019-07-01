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

// -------- COMEÇA A VALIDAÇÃO DOS CAMPOS DO FOM CADSTRO CLIENTE -------

function validacao(){
   senha = document.form1.senha.value;
   senha2 = document.form1.confirmasenha.value;
   
   if (senha == senha2){
      if(senha.length < 3){
         //erro = document.getElementById('erroSenha');
         //erro.innerHTML = "<p>A senha deverá conter no mínimo 6 caracteres!</p>";
         //return false;
      /*}else if(senha.length > 8){
         //erro = document.getElementById('erroSenha2');
         //erro.innerHTML = "<p>A senha deverá conter no máximo 8 caracteres!</p>";
         //return false;*/
         erro = document.getElementById('erroSenha');
         erro.innerHTML = "<p><font size='2' color='red'>A senha deverá conter no mínimo 3 dígitos!</font></p>";// e no máximo 8 caracteres!</p>";
         document.form1.senha.blur();
         return false;
      }
      //return true;
       //erro = document.getElementById('erroSenha');
       //erro.innerHTML = "<p>A senha deverá conter no mínimo 3</p>";// e no máximo 8 caracteres!</p>";
      //document.form1.senha.blur();
      //return false;
   }else{
      erro = document.getElementById('erroconfi');
      erro.innerHTML = "<p><font size='2' color='red'>Confirmação de Senha Incorreta!</font></p>";
      document.form1.confirmasenha.focus();
      return false;   
   }
      return true;
}

/*function validacao(){
   senha = document.form1.senha.value;
   senha2 = document.form1.confirmasenha.value;
   
      if((senha.length < 3)){
         erro = document.getElementById('erroSenha');
         erro.innerHTML = "<p><font size='2' color='red'>A senha deverá conter no mínimo 3 caracteres!</p>";
         document.form1.senha.blur();
         return false;
      }else if(senha != senha2){
         erro = document.getElementById('erroconfi');
         erro.innerHTML = "<p><font size='2' color='red'>Confirmação de Senha Incorreta!</p>";
         document.form1.senha2.focus();
      }
      else{
         return true;  
      } 

}*/

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
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Nome acima!</p>";
         document.form1.nome.focus();
         
      }else if(doc == ""){
         erro = document.getElementById('campo2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Documento acima!</p>";
         document.form1.cnpj.focus();
      
      }else if (endereco == ""){
         erro = document.getElementById('campo3');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Endereço acima!</p>";
         document.form1.endereco.focus();   
      
      }else if (email == ""){
         erro = document.getElementById('campo4');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Email acima!</p>";
         document.form1.email.focus();
      
      }else if (senha == ""){
         erro = document.getElementById('campo5');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Senha acima!</p>";
         document.form1.senha.focus();
      
      }else if (confsenha == ""){
         erro = document.getElementById('campo6');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Confirma Senha acima!</p>";
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
         erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente números. </br>A quantidade de dígitos deverá ser no máximo 14!</font></p>";
         document.form1.cnpj.focus();
         return false;
      }
   }
}

function somenteLetraNumero(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if (((tecla >= 33) && (tecla <= 43)) || ((tecla >= 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p>Documento Correto!</p>";
      erro = document.getElementById('endereco');
      erro.innerHTML = "<p><font size='2' color='red'>Endereço Incorreto! Inválido para caracteres especiais.</font></p>";
      document.form1.endereco.focus();
      return false;
      //return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('endereco');
        //erro.innerHTML = "<p>Endereço Incorreto! Inválido para caracteres especiais</p>";
         //document.form1.endereco.focus();
         //return false;
         return true;
      }
   }
}

function somenteLetra(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p><font size='2' color='red'>Nome Incorreto! Digite somente Letras.</font></p>";
      document.form1.nome.focus();
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
   if (((tecla >= 32) && (tecla <= 44)) || ((tecla > 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('email');
      erro.innerHTML = "<p><font size='2' color='red'>E-mail Invalido! Informe o email no padrão correto!</font></p>";
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
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Codigo da Bebida acima!</font></p>";
         document.form2.idBebida.focus();
         
      }else if(bebida == ""){
         erro = document.getElementById('campo2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Nome da Bebida acima!</font></p>";
         document.form2.nome.focus();
      
      }else if (volume == ""){
         erro = document.getElementById('campo3');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Volume acima!</font></p>";
         document.form2.volume.focus();   
      
      }else if (preco == ""){
         erro = document.getElementById('campo4');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Preco acima!</font></p>";
         document.form2.preco.focus();
      
      }else if (fabricante == ""){
         erro = document.getElementById('campo5');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Fabricante acima!</font></p>";
         document.form2.fabricante.focus();
      
      }else if (qntdestoque == ""){
         erro = document.getElementById('campo6');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Quantidade no Estoque acima!</font></p>";
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
   
   if((codigo.length == 11) || ((tecla >= 32) && (tecla <= 44)) || ((tecla >= 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('cod');
      erro.innerHTML = "<p><font size='2' color='red'>O código deverá ter no máximo 11 dígitos, incluindo números e letras!</font></p>";
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
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('vol');
         erro.innerHTML = "<p><font size='2' color='red'>Volume Incorreto! Informe o volume em ml. Dica: 1 l corresponde a 1.000 ml.</font></p>";
         document.form2.volume.focus();
         return false;
      }
   }
}

function somenteNumeroPreco(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('preco');
         erro.innerHTML = "<p><font size='2' color='red'>Preço Incorreto! Dica: 20.50</font></p>";
         document.form2.preco.focus();
         return false;
      }
   }
}

function somenteLetraNome(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p><font size='2' color='red'>Nome Incorreto! Digite somente letras.</font></p>";
      document.form2.nome.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}

function somenteLetraFabricante(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('fabricante');
      erro.innerHTML = "<p><font size='2' color='red'>Fabricante Incorreto! Digite somente letras.</font></p>";
      document.form2.fabricante.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}

//---------- COMEÇA AQUI A VALIDAÇÃO DO FORMULÁRIO DE LOGIN DO USUÁRIO ------------

function verificaEmailLogin(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if (((tecla >= 32) && (tecla <= 44)) || ((tecla > 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('email');
      erro.innerHTML = "<p><font size='2' color='red'>Digite apenas caracteres válidos! Padrão para e-mail incorreto!</font></p>";
      document.form3.login.focus();
      return false;
   }else{
      return true;
   }
}

function verificaSenhaLogin(){
   senha = document.form3.senha.value;
   if((senha.length < 3)){
      erro = document.getElementById('senha');
      erro.innerHTML = "<p><font size='2' color='red'>Senha Inválida!</font></p>";
      document.form3.senha.focus();
      return false;
   }else{
      return true;
   }   
}


    
//------- COMEÇA AQUI A VALIDAÇÃO DO FORMULARIO DE ATUALIZAÇÃO DO CLIENTE --------

function somenteLetraNome(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p><font size='2' color='red'>Nome Incorreto! Digite somente Letras.</p>";
      document.form4.nome.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}

function somenteNumeroDoc(e){
   tam = document.form4.cnpj.value;
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla > 47) && (tecla < 58)) && (tam.length < 14)){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('doc');
         erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</br>A quantidade de dígitos deverá ser no maximo 14!</p>";
         document.form4.cnpj.focus();
         return false;
      }
   }
}

function somenteLetraNumeroEnd(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if (((tecla >= 33) && (tecla <= 43)) || ((tecla >= 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p>Documento Correto!</p>";
      erro = document.getElementById('endereco');
      erro.innerHTML = "<p><font size='2' color='red'>Endereço Incorreto! Inválido para caracteres especiais</p>";
      document.form4.endereco.focus();
      return false;
      //return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('endereco');
        //erro.innerHTML = "<p><font size='2' color='red'>Endereço Incorreto! Inválido para caracteres especiais</p>";
         //document.form1.endereco.focus();
         //return false;
         return true;
      }
   }
}

function verificaEmailAtualizacao(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if (((tecla >= 32) && (tecla <= 44)) || ((tecla > 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('email');
      erro.innerHTML = "<p><font size='2' color='red'>E-mail Invalido! Informe o email no padrão correto!</p>";
      document.form4.email.focus();
      return false;
   }else{
      return true;
   }
}

function verificaSenha(){
   senha = document.form4.senha.value;
   senha2 = document.form4.confirmasenha.value;
   
   if (senha == senha2){
      if(senha.length < 3){
         //erro = document.getElementById('erroSenha');
         //erro.innerHTML = "<p>A senha deverá conter no mínimo 6 caracteres!</p>";
         //return false;
      /*}else if(senha.length > 8){
         //erro = document.getElementById('erroSenha2');
         //erro.innerHTML = "<p>A senha deverá conter no máximo 8 caracteres!</p>";
         //return false;*/
         erro = document.getElementById('erroSenha');
         erro.innerHTML = "<p><font size='2' color='red'>A senha deverá conter no mínimo 3 dígitos!</p>";// e no máximo 8 caracteres!</p>";
         document.form4.senha.blur();
         return false;
      }
      //return true;
       //erro = document.getElementById('erroSenha');
       //erro.innerHTML = "<p>A senha deverá conter no mínimo 3</p>";// e no máximo 8 caracteres!</p>";
      //document.form1.senha.blur();
      //return false;
   }else{
      erro = document.getElementById('erroconfi');
      erro.innerHTML = "<p><font size='2' color='red'>Confirmação de Senha Incorreta!</p>";
      document.form4.confirmasenha.focus();
      return false;   
   }
      return true;
}

/*FAZER TESTES NA SENHA TANTO AQUI QUANTO NA FUNÇÃO VALIDAÇÃO()*/

/*function verificaSenha(){
   senha = document.form4.senha.value;
   senha2 = document.form4.confirmasenha.value;
   
   if (senha != senha2){
      if((senha.length < 6) || (senha.length > 8)){
         erro = document.getElementById('erroSenha');
         erro.innerHTML = "<p><font size='2' color='red'>A senha deverá conter no mínimo 3 caracteres</p>";
         document.form4.senha.focus();
         return false;
      }else {
         return true;
      }
   }else{
      erro = document.getElementById('erroconfi');
      erro.innerHTML = "<p><font size='2' color='red'>Confirmação de Senha Incorreta!</p>";
      document.form4.senha2.focus();
      return false;   
   }
}*/

//------- COMEÇA AQUI A VALIDAÇÃO DO FORMULARIO DE ATUALIZAÇÃO DE BEBIDAS --------

function somenteLetraNome(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p><font size='2' color='red'>Nome da Bebida Incorreto! Digite somente letras.</p>";
      document.form5.nome.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}

function somenteNumeroVolume(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('vol');
         erro.innerHTML = "<p><font size='2' color='red'>Volume Incorreto! Informe o volume em ml. Dica: 1 l corresponde a 1.000 ml</p>";
         document.form5.volume.focus();
         return false;
      }
   }
}

function somenteNumeroPreco(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('preco');
         erro.innerHTML = "<p><font size='2' color='red'>Preço Incorreto! Dica: 20.50</p>";
         document.form5.preco.focus();
         return false;
      }
   }
}

function somenteLetraFabricante(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('fabricante');
      erro.innerHTML = "<p><font size='2' color='red'>Fabricante Incorreto! Digite somente letras.</p>";
      document.form5.fabricante.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}

 