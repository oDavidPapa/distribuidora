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

// ############ COMEÇA A VALIDAÇÃO DOS CAMPOS DO FORM CADASTRO CLIENTE ##############

function validacao2(){
   nome = document.form1.nome.value;
   doc = document.form1.cnpj.value;
   endereco = document.form1.endereco.value;
   cidade = document.form1.cidade.value;
   email = document.form1.email.value;
   senha = document.form1.senha.value;
   confsenha = document.form1.confirmasenha.value;
   
   
   if ((nome == "") || (doc == "") || (endereco == "") || (email == "") || (senha == "") || (confsenha == "")){
      
      if (nome == ""){
         erro = document.getElementById('campo1');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Nome acima!</font></p>";
         document.form1.nome.focus();
         
      }else if(doc == ""){
         erro = document.getElementById('campo2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Documento acima!</font></p>";
         document.form1.cnpj.focus();
      
      }else if (endereco == ""){
         erro = document.getElementById('campo3');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Endereço acima!</font></p>";
         document.form1.endereco.focus();
         
      }else if (cidade == ""){
         erro = document.getElementById('campo7');
         erro.innerHTML = "<p><font size='2' color='red'>Favor selecionar o campo Cidade acima!</font></p>";
         document.form1.cidade.focus();   
      
      }else if (email == ""){
         erro = document.getElementById('campo4');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Email acima!</font></p>";
         document.form1.email.focus();
      
      }else if (senha == ""){
         erro = document.getElementById('campo5');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Senha acima!</font></p>";
         document.form1.senha.focus();
      
      }else if (confsenha == ""){
         erro = document.getElementById('campo6');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Confirma Senha acima!</font></p>";
         document.form1.confirmasenha.focus();
      }
      //erro.innerHTML = "<p></p>"; // FICAR DE OLHO VÊ SE DEIXO ASSIM
      return false;
      
   }else{
      return true;
      
   }
}


function campo5(){
   senha=document.form1.senha.value;
   if(senha.length > 0){
      erro = document.getElementById('campo5');
      erro.innerHTML = "<p></p>";
   }
}
function campoSenha(){
   senha=document.form1.senha.value;
   if(senha.length > 0){
      erro = document.getElementById('erroSenha');
      erro.innerHTML = "<p></p>";
   }
}


function campo6(){
   confiSenha=document.form1.confirmasenha.value;
   if(confiSenha.length > 0){
      erro = document.getElementById('campo6');
      erro.innerHTML = "<p></p>";
   }
}
function campoConfiSenha(){
   confiSenha=document.form1.confirmasenha.value;
   if(confiSenha.length > 0){
      erro = document.getElementById('erroconfi');
      erro.innerHTML = "<p></p>";
   }
}

function validacao(){
   senha = document.form1.senha.value;
   senha2 = document.form1.confirmasenha.value;
   campo5();
   campo6();
   if(validacao2()){
   
   if (senha == senha2){
     
      if(senha.length < 3){
          
         campoSenha();
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
      campoConfiSenha();
      erro = document.getElementById('erroconfi');
      erro.innerHTML = "<p><font size='2' color='red'>Confirmação de Senha Incorreta!</font></p>";
      document.form1.confirmasenha.focus();
      return false;   
   }
      return true;
   }
   else{
      return false;
   }   
}


function campo2(){
   doc=document.form1.cnpj.value;
   if(doc.length > 0){
      erro = document.getElementById('campo2');
      erro.innerHTML = "<p></p>";
   }
}
function campoDoc(){
   doc=document.form1.cnpj.value;
   if(doc.length > 0){
      erro = document.getElementById('doc');
      erro.innerHTML = "<p></p>";
   }
}

function somenteNumero(e){
   tam = document.form1.cnpj.value;
   var tecla = (window.event)?event.keyCode:e.which;
   campo2();
   campoDoc();
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


function campo3(){
   ende=document.form1.endereco.value;
   if(ende.length > 0){
      erro = document.getElementById('campo3');
      erro.innerHTML = "<p></p>";
   }
}
function campoEnde(){
   endereco=document.form1.endereco.value;
   if(endereco.length > 0){
      erro = document.getElementById('endereco');
      erro.innerHTML = "<p></p>";
   }
}

function somenteLetraNumero(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campo3();
   campoEnde();
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


function campo1(){
   nome=document.form1.nome.value;
   if(nome.length > 0){
      erro = document.getElementById('campo1');
      erro.innerHTML = "<p></p>";
   }
}
function campoNome(){
   nome=document.form1.nome.value;
   if(nome.length > 0){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p></p>";
   }
}

function somenteLetra(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campo1();
   campoNome();
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


function campo4(){
   em=document.form1.email.value;
   if(em.length > 0){
      erro = document.getElementById('campo4');
      erro.innerHTML = "<p></p>";
   }
}
function campoEmail(){
   email=document.form1.email.value;
   if(email.length > 0){
      erro = document.getElementById('email');
      erro.innerHTML = "<p></p>";
   }
}

function verificaEmail(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campo4();
   campoEmail();
   if (((tecla >= 32) && (tecla <= 44)) || ((tecla > 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('email');
      erro.innerHTML = "<p><font size='2' color='red'>E-mail Invalido! Informe o email no padrão correto!</font></p>";
      document.form1.email.focus();
      return false;
   }else{
      return true;
   }
}


//############## COMEÇA AQUI A VALIDAÇÃO DO FORMULÁRIO DE CADASTRO DE BEBIDAS ###############

function validacaoObrigatorio(){
   codigo = document.form2.idBebida.value;
   bebida = document.form2.nome.value;
   volume = document.form2.volume.value;
   preco = document.form2.preco.value;
   fabricante = document.form2.fabricante.value;
   qntdestoque = document.form2.quantidadeEstoque.value;
   
   
   if ((codigo == "") || (bebida == "") || (volume == "") || (preco == "") || (fabricante == "") || (qntdestoque == "")){
      
      if (codigo == ""){
         erro = document.getElementById('campo1Form2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Codigo da Bebida acima!</font></p>";
         document.form2.idBebida.focus();
         
      }else if(bebida == ""){
         erro = document.getElementById('campo2Form2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Nome da Bebida acima!</font></p>";
         document.form2.nome.focus();
      
      }else if (volume == ""){
         erro = document.getElementById('campo3Form2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Volume acima!</font></p>";
         document.form2.volume.focus();   
      
      }else if (preco == ""){
         erro = document.getElementById('campo4Form2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Preco acima!</font></p>";
         document.form2.preco.focus();
      
      }else if (fabricante == ""){
         erro = document.getElementById('campo5Form2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Fabricante acima!</font></p>";
         document.form2.fabricante.focus();
      
      }else if (qntdestoque == ""){
         erro = document.getElementById('campo6Form2');
         erro.innerHTML = "<p><font size='2' color='red'>Favor preencher o campo Quantidade no Estoque acima!</font></p>";
         document.form2.quantidadeEstoque.focus();
      }
      return false;
   }else{
      return true;
   }
}


function campo1Bebida(){
   cod=document.form2.idBebida.value;
   if(cod.length > 0){
      erro = document.getElementById('campo1Form2');
      erro.innerHTML = "<p></p>";
   }
}
function campoCodigoBebida(){
   cod=document.form2.idBebida.value;
   if(cod.length > 0){
      erro = document.getElementById('cod');
      erro.innerHTML = "<p></p>";
   }
}

function tamanhoCodigoBebida(e){
   codigo = document.form2.idBebida.value;
   var tecla = (window.event)?event.keyCode:e.which;
   campo1Bebida();
   campoCodigoBebida();
    if((codigo.length == 11) || ((tecla >= 32) && (tecla <= 44)) || ((tecla >= 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('cod');
      erro.innerHTML = "<p><font size='2' color='red'>O código deverá ter no máximo 11 dígitos, incluindo números e letras!</font></p>";
      document.form2.idBebida.focus();
      return false;
    }else{
      return true;
   }
}


function campo2Bebida(){
   nome=document.form2.nome.value;
   if(nome.length > 0){
      erro = document.getElementById('campo2Form2');
      erro.innerHTML = "<p></p>";
   }
}
function campoCadastroNomeBebida(){
   nome=document.form2.nome.value;
   if(nome.length > 0){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p></p>";
   }
}

function somenteLetraBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campo2Bebida();
   campoCadastroNomeBebida();
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p><font size='2' color='red'>Nome da Bebida Incorreto! Digite somente letras.</font></p>";
      document.form2.nome.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</font></p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}


function campo3Bebida(){
   vol=document.form2.volume.value;
   if(vol.length > 0){
      erro = document.getElementById('campo3Form2');
      erro.innerHTML = "<p></p>";
   }
}
function campoCadastroVolumeBebida(){
   vol=document.form2.volume.value;
   if(vol.length > 0){
      erro = document.getElementById('vol');
      erro.innerHTML = "<p></p>";
   }
}

function somenteVolumeNumeroBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campo3Bebida();
   campoCadastroVolumeBebida();
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('vol');
         erro.innerHTML = "<p><font size='2' color='red'>Volume Incorreto! Informe o volume em ml. Dica: 1 l corresponde a 1.000 ml</font></p>";
         document.form2.volume.focus();
         return false;
      }
   }
}


function campo4Bebida(){
   preco=document.form2.preco.value;
   if(preco.length > 0){
      erro = document.getElementById('campo4Form2');
      erro.innerHTML = "<p></p>";
   }
}
function campoCadastroPrecoBebida(){
   preco=document.form2.preco.value;
   if(preco.length > 0){
      erro = document.getElementById('preco');
      erro.innerHTML = "<p></p>";
   }
}

function somentePrecoNumeroBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campo4Bebida();
   campoCadastroPrecoBebida();
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</font></p>";
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


function campo5Bebida(){
   fabri=document.form2.fabricante.value;
   if(fabri.length > 0){
      erro = document.getElementById('campo5Form2');
      erro.innerHTML = "<p></p>";
   }
}
function campoCadastroFabricanteBebida(){
   fabri=document.form2.fabricante.value;
   if(fabri.length > 0){
      erro = document.getElementById('fabricante');
      erro.innerHTML = "<p></p>";
   }
}

function somenteFabricanteLetraBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campo5Bebida();
   campoCadastroFabricanteBebida();
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
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</font></p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}


function campo6Bebida(){
   qntd=document.form2.quantidadeEstoque.value;
   if(qntd.length > 0){
      erro = document.getElementById('campo6Form2');
      erro.innerHTML = "<p></p>";
   }
}
function campoCadastroQuantidadeBebida(){
   qntd=document.form2.quantidadeEstoque.value;
   if(qntd.length > 0){
      erro = document.getElementById('quantidadeEstoque');
      erro.innerHTML = "<p></p>";
   }
}

function somenteQuantidadeNumeroBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campo6Bebida();
   campoCadastroQuantidadeBebida();
   if(((tecla > 47) && (tecla < 58))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</font></p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('quantidadeEstoque');
         erro.innerHTML = "<p><font size='2' color='red'>Quantidade Incorreta! Digite somente números.</font></p>";
         document.form2.quantidadeEstoque.focus();
         return false;
      }
   }
}


//############# COMEÇA AQUI A VALIDAÇÃO DO FORMULÁRIO DE LOGIN DO USUÁRIO ##############


function campoEmail(){
   email=document.form3.login.value;
   if(email.length > 0){
      erro = document.getElementById('email');
      erro.innerHTML = "<p></p>";
   }
}

function verificaEmailLogin(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoEmail();
   if (((tecla >= 32) && (tecla <= 44)) || ((tecla > 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('email');
      erro.innerHTML = "<p><font size='2' color='red'>Digite apenas caracteres válidos! Padrão para e-mail incorreto!</font></p>";
      document.form3.login.focus();
      return false;
   }else{
      return true;
   }
}

function campoSenha(){
   senha=document.form3.senha.value;
   if(senha.length > 0){
      erro = document.getElementById('senha');
      erro.innerHTML = "<p></p>";
   }
}

function verificaSenhaLogin(){
   senha = document.form3.senha.value;
   campoSenha();
   if((senha.length < 3)){
      erro = document.getElementById('senha');
      erro.innerHTML = "<p><font size='2' color='red'>Senha Inválida!</font></p>";
      document.form3.senha.focus();
      return false;
   }else{
      return true;
   }   
}


    
//############# COMEÇA AQUI A VALIDAÇÃO DO FORMULARIO DE ATUALIZAÇÃO DO CLIENTE ###############

function campoNomeCliente(){
   nome=document.form4.nome.value;
   if(nome.length > 0){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p></p>";
   }
}

function somenteLetraCliente(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoNomeCliente();
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p><font size='2' color='red'>Nome Incorreto! Digite somente Letras.</font></p>";
      document.form4.nome.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</font></p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}


function campoDocCliente(){
   doc=document.form4.cnpj.value;
   if(doc.length > 0){
      erro = document.getElementById('doc');
      erro.innerHTML = "<p></p>";
   }
}

function somenteNumeroDoc(e){
   tam = document.form4.cnpj.value;
   var tecla = (window.event)?event.keyCode:e.which;
   campoDocCliente();
   if(((tecla > 47) && (tecla < 58)) && (tam.length < 14)){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</font></p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('doc');
         erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</br>A quantidade de dígitos deverá ser no maximo 14!</font></p>";
         document.form4.cnpj.focus();
         return false;
      }
   }
}


function campoEndeCliente(){
   ende=document.form4.endereco.value;
   if(ende.length > 0){
      erro = document.getElementById('endereco');
      erro.innerHTML = "<p></p>";
   }
}

function somenteLetraNumeroEnd(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoEndeCliente();
   if (((tecla >= 33) && (tecla <= 43)) || ((tecla >= 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p>Documento Correto!</p>";
      erro = document.getElementById('endereco');
      erro.innerHTML = "<p><font size='2' color='red'>Endereço Incorreto! Inválido para caracteres especiais</font></p>";
      document.form4.endereco.focus();
      return false;
      //return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('endereco');
        //erro.innerHTML = "<p><font size='2' color='red'>Endereço Incorreto! Inválido para caracteres especiais.</font></p>";
         //document.form1.endereco.focus();
         //return false;
         return true;
      }
   }
}


function campoEmailCliente(){
   email=document.form4.email.value;
   if(email.length > 0){
      erro = document.getElementById('email');
      erro.innerHTML = "<p></p>";
   }
}

function verificaEmailAtualizacao(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoEmailCliente();
   if (((tecla >= 32) && (tecla <= 44)) || ((tecla > 46) && (tecla <= 47)) || ((tecla >= 58) && (tecla <= 63)) || ((tecla >= 91) && (tecla <= 94)) || ((tecla >= 96) && (tecla < 97)) || ((tecla >= 123) && (tecla <= 126)) || ((tecla >= 135) && (tecla <= 191))){
      erro = document.getElementById('email');
      erro.innerHTML = "<p><font size='2' color='red'>E-mail Invalido! Informe o email no padrão correto!</font></p>";
      document.form4.email.focus();
      return false;
   }else{
      return true;
   }
}


function campoSenhaCliente(){
   senha=document.form4.senha.value;
   if(senha.length > 0){
      erro = document.getElementById('erroSenha');
      erro.innerHTML = "<p></p>";
   }
}

function campoConfiSenhaCliente(){
   confirma=document.form4.confirmasenha.value;
   if(confirma.length > 0){
      erro = document.getElementById('erroconfi');
      erro.innerHTML = "<p></p>";
   }
}

function verificaSenha(){
   senha = document.form4.senha.value;
   senha2 = document.form4.confirmasenha.value;
   campoSenhaCliente();
   campoConfiSenhaCliente();
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
      erro.innerHTML = "<p><font size='2' color='red'>Confirmação de Senha Incorreta!</font></p>";
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
         erro.innerHTML = "<p><font size='2' color='red'>A senha deverá conter no mínimo 3 caracteres.</font></p>";
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



//############## COMEÇA AQUI A VALIDAÇÃO DO FORMULARIO DE ATUALIZAÇÃO DE BEBIDAS ################


function campoNomeBebida(){
   nome=document.form5.nome.value;
   if(nome.length > 0){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p></p>";
   }
}

function somenteLetraNomeBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoNomeBebida();
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('nome');
      erro.innerHTML = "<p><font size='2' color='red'>Nome da Bebida Incorreto! Digite somente letras.</font></p>";
      document.form5.nome.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</font></p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}


function campoVolumeBebida(){
   vol=document.form5.volume.value;
   if(vol.length > 0){
      erro = document.getElementById('vol');
      erro.innerHTML = "<p></p>";
   }
}


function somenteNumeroVolumeBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoVolumeBebida();
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('vol');
         erro.innerHTML = "<p><font size='2' color='red'>Volume Incorreto! Informe o volume em ml. Dica: 1 l corresponde a 1.000 ml</font></p>";
         document.form5.volume.focus();
         return false;
      }
   }
}


function campoPrecoBebida(){
   preco=document.form5.preco.value;
   if(preco.length > 0){
      erro = document.getElementById('preco');
      erro.innerHTML = "<p></p>";
   }
}

function somenteNumeroPrecoBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoPrecoBebida();
   if(((tecla > 47) && (tecla < 58)) || ((tecla == 46))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</font></p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('preco');
         erro.innerHTML = "<p><font size='2' color='red'>Preço Incorreto! Dica: 20.50</font></p>";
         document.form5.preco.focus();
         return false;
      }
   }
}


function campoFabricanteBebida(){
   fabri=document.form5.fabricante.value;
   if(fabri.length > 0){
      erro = document.getElementById('fabricante');
      erro.innerHTML = "<p></p>";
   }
}

function somenteLetraFabricanteBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoFabricanteBebida();
   if(((tecla >= 33) && (tecla <= 64)) || ((tecla >= 91) && (tecla <= 96)) || ((tecla >= 123) && (tecla <= 126))){
      erro = document.getElementById('fabricante');
      erro.innerHTML = "<p><font size='2' color='red'>Fabricante Incorreto! Digite somente letras.</font></p>";
      document.form5.fabricante.focus();
      return false;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         //erro = document.getElementById('doc');
         //erro.innerHTML = "<p><font size='2' color='red'>Documento Incorreto! Digite somente Numeros.</font></p>";
         //document.form1.cnpj.focus();
         return true;
      }
   }
}


function campoQuantidadeBebida(){
   qntd=document.form5.quantidadeEstoque.value;
   if(qntd.length > 0){
      erro = document.getElementById('quantidadeEstoque');
      erro.innerHTML = "<p></p>";
   }
}

function somenteNumeroQuantidadeBebida(e){
   var tecla = (window.event)?event.keyCode:e.which;
   campoQuantidadeBebida();
   if(((tecla > 47) && (tecla < 58))){
      //acerto = document.getElementById('doc2');
      //acerto.innerHTML = "<p><font size='2' color='red'>Documento Correto!</font></p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('quantidadeEstoque');
         erro.innerHTML = "<p><font size='2' color='red'>Quantidade Incorreta! Digite somente números.</font></p>";
         document.form5.quantidadeEstoque.focus();
         return false;
      }
   }
}



 