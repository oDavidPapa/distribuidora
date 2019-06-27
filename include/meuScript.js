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
         erro = document.getElementById('erroSenha');
         erro.innerHTML = "<p>A senha deverá conter no mínimo 6 caracteres!</p>";
         return false;
      }else if(senha.length > 8){
         erro = document.getElementById('erroSenha2');
         erro.innerHTML = "<p>A senha deverá conter no máximo 12 caracteres!</p>";
         return false;
      }
   }else{
      erro = document.getElementById('erroSenha3');
      erro.innerHTML = "<p>Confirmação de Senha Incorreta!</p>";
      document.form1.senha.focus();
      return false;   
   }

   nome = document.form1.nome.value;
   email= document.form1.email.value;
   endereco = document.form1.endereco.value;
   msg= "";
   if ((nome == "") || (email == "") || (endereco == "")){
      if (nome == ""){
         msg = " \n NOME ";
      }
      if (email == ""){
         msg = msg + " \n EMAIL";
      }
      if (endereco == ""){
         msg = msg + " \n ENDERECO";
      }
         erro = document.getElementById('campos');
         erro.innerHTML = "<p>FAVOR PREENCHER OS CAMPOS ABAIXO OBRIGATÓRIOS " + msg + "</p>";
         return false;
   }else{
      return true;
   }
   
   // NAO ESTOU ENTENDO SE ESSA VALIDACAO DE CPF VAI AQUI OU EM UMA FUNÇÃO SEPARA
   // POIS A FUNÇÃO É CHAMADA NO ONKEYPRESS DO CAMPO CPF.
   /*var tecla = (window.event)?event.keyCode:e.which;
   if((tecla > 47) && (tecla < 58)){
      acerto = document.getElementById('doc');
      acerto.innerHTML = "<p>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('doc2');
         erro.innerHTML = "<p>Documento Incorreto!</p>";
         document.form1.cnpj.focus();
         return false;
      }
   }*/


}
function somenteNumero(e){
   var tecla = (window.event)?event.keyCode:e.which;
   if((tecla > 47) && (tecla < 58)){
      acerto = document.getElementById('doc');
      acerto.innerHTML = "<p>Documento Correto!</p>";
      return true;
   }else{
      if((tecla == 8) || (tecla == 0)){
         return true;
      }else{
         erro = document.getElementById('doc2');
         erro.innerHTML = "<p>Documento Incorreto! Digite somente Numeros.</p>";
         document.form1.cnpj.focus();
         return false;
      }
   }
 }



 