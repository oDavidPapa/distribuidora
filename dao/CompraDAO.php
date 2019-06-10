<?php

include_once('Conexao.php');
include_once('../model/Compra.php');
include_once('../model/ItemCompra.php');

class CompraDAO {

    private $con;

    /* ------- Instanciando o objeto conexão ------- */

    public function CompraDAO() {
        $c = new Conexao();
        $this->con = $c->getConexao();
    }

    public function incluirCompra($compra, $carrinho) {
        $sql = $this->con->prepare("INSERT INTO compras (idCliente, dataCompra, valorTotal, valorFrete) "
                . "VALUES (:idCliente, :dataCompra, :valorTotal, :valorFrete)");

        $sql->bindValue(':idCliente', $compra->getCliente());
        $sql->bindValue(':dataCompra', $this->converterDataMysql($compra->getDataCompra()));
        $sql->bindValue(':valorTotal', $compra->getValorTotal());
        $sql->bindValue(':valorFrete', $compra->getValorFrete());

        $sql->execute();

        $id = $this->getIdCompra();
        $this->incluirItens($id, $carrinho);
    }

    private function incluirItens($idCompra, $carrinho) {
        $cont = 1;
        foreach ($carrinho as $item) {
            $sql = $this->con->prepare("INSERT INTO itenscompra (idItem, idBebida, quantidade, valorItem, idCompra) "
                    . "VALUES (:idItem, :idBebida, :quantidade, :valorItem, :idCompra)");

            $sql->bindValue(':idItem', $cont);
            $sql->bindValue(':idBebida', $item->getIdBebida());
            $sql->bindValue(':quantidade', $item->getQuantidade());
            $sql->bindValue(':valorItem', $item->getValorItem());
            $sql->bindValue(':idCompra', $idCompra);

            $sql->execute();
            $cont++;
        }
    }

    private function getIdCompra() {
        $sql = $this->con->query("SELECT MAX(idCompra) AS maior FROM compras");
        $sql->execute();

        $row = $sql->fetch(PDO::FETCH_OBJ);

        return $row->maior;
    }

    private function converterDataMysql($data) {
        return date('Y-m-d', $data);
    }

}

?>        