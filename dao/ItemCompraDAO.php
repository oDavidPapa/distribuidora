<?php

include_once('Conexao.php');
include_once('../model/ItemCompra.php');

class ItemCompraDAO {

    private $con;

    /* ------- Instanciando o objeto conexão ------- */

    public function ItemCompraDAO() {
        $c = new Conexao();
        $this->con = $c->getConexao();
    }
    
    public function criarItem($idBebida, $idCompra){
        $sql = $this->con->prepare("INSERT INTO itenscompra (idBebida, valorItem, idCompra) VALUES"
                . "(:idBebida, "
                . ":valorItem, "
                . ":idCompra)");
        $sql->bindValue(':idBebida', $idBebida);
        $sql->bindValue(':valorItem', $this->getValorBebida($idBebida));
        $sql->bindValue(':idCompra', $idCompra);
        
        $sql->execute();
    }
    
    function getValorBebida($idBebida) {
        $sql = $this->con->prepare("SELECT preco FROM bebidas WHERE idBebida = :idBebida");
        $sql->bindValue(':idBebida', $idBebida);

        $sql->execute();
        $bebida = $sql->fetch(PDO::FETCH_OBJ);
        return $bebida->preco;
    }

   /* public function getItens() {
        // echo "entrou";
        $rs = $this->con->prepare("SELECT * FROM itenscompra");
        $rs->execute();


        //  echo "depois";
        $itens = array();
        while ($row = $rs->fetch(PDO::FETCH_OBJ)) {
            //var_dump($row);

            $item = new ItemCompra();
            $item->setIdItem($row->idItem);
            $item->setIdBebida($row->idBebida);
            $item->setIdCompra($row->idCompra);
            $item->setQuantidade($row->quantidade);
            $item->setPreco($this->getPreco($row->idBebida));
            $itens[] = $item;
        }


        // var_dump($publicacoes);
        return $itens;
    }

    public function getItem($idItem) {
        // echo "entrou";
        $rs = $this->con->prepare("SELECT * FROM itenscompra WHERE idItem = $idItem");
        $rs->execute();

        $row = $sql->fetch(PDO::FETCH_OBJ);
        //  echo "depois";

        $item = new ItemCompra();
        $item->setIdItem($row->idItem);
        $item->setIdBebida($row->idBebida);
        $item->setIdCompra($row->idCompra);
        $item->setQuantidade($row->quantidade);
        $item->setPreco($this->getPreco($row->idBebida));

        return $item;
    }
*/
}
?>        

