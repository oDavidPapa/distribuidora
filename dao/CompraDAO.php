<?php

include_once('Conexao.php');
include_once('../model/Compra.php');

class CompraDAO {

    private $con;

    /* ------- Instanciando o objeto conexão ------- */

    public function CompraDAO() {
        $c = new Conexao();
        $this->con = $c->getConexao();
    }

    function converterDataMysql($data) {
        return date('Y-m-d', $data);
    }

    public function inserirCompra(Compra $compra) {
        $sql = $this->con->prepare("INSERT INTO compras (idCliente, dataCompra, valorTotal, valorFrete) "
                . "VALUES ("
                . ":idCliente, "
                . ":dataCompra, "
                . ":valorTotal, "
                . ":valorFrete)");
        $sql->bindValue(':idCliente', $compra->getIdCliente());
        $sql->bindValue(':dataCompra', $this->converterDataMysql($compra->getDataCompra()));
        $sql->bindValue(':valorToral', $compra->getValorTotal());
        $sql->bindValue(':valorFrete', $compra->getValorFrete());

        $sql->execute();
        
    }

    public function getCompras() {
        $resultado = $this->con->query("SELECT * FROM compras");

        $lista = array();

        while ($compra = $resultado->fetch(PDO::FETCH_OBJ)) {
            $lista[] = $compra;
        }
        return $lista;
    }

    public function getCompra($idCompra) {
        $sql = $this->con->prepare("SELECT * FROM compras WHERE idCompra = :idCompra");
        $sql->bindValue(':idCompra', $idCompra);
        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }
    
    public function  inserirItens($itens){
        
    }

}
