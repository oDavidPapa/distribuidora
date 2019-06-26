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
 