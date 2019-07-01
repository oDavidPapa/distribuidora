<?php

include_once("Conexao.php");
include_once "../distribuidora/model/Cliente.php";

class ClienteDAO {

    private $con;

    public function ClienteDAO() {
        $conexao = new Conexao();
        $this->con = $conexao->getConexao();
    }

    public function inserirCliente(Cliente $cliente) {
        $sql = $this->con->prepare("INSERT INTO clientes "
                . "(nome, cnpj, endereco, idCidade, email, senha) "
                . "VALUES "
                . "(:nome, :cnpj, :endereco, :idCidade, :email, :senha)");

        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':cnpj', $cliente->getCnpj());
        $sql->bindValue(':endereco', $cliente->getEndereco());
        $sql->bindValue(':idCidade', $cliente->getIdCidade());
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':senha', $cliente->getSenha());

        $sql->execute();
    }

    public function getClientes() {
        $clientes = array();
        $rs = $this->con->query("SELECT * FROM clientes");

        while ($cliente = $rs->fetch(PDO::FETCH_OBJ)) {
            $clientes[] = $cliente;
        }
        return $clientes;
    }

    public function excluirCliente($idCliente) {
        $sql = $this->con->prepare("DELETE FROM clientes WHERE idCliente = :idCliente");
        $sql->bindValue(':idCliente', $idCliente);

        $sql->execute();
    }

    public function getCliente($idCliente) {
        $sql = $this->con->prepare("SELECT * FROM clientes WHERE idCliente = :idCliente");
        $sql->bindValue(':idCliente', $idCliente);

        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function atualizarCliente(Cliente $cliente) {
        $sql = $this->con->prepare("UPDATE clientes SET "
                . "nome = :nome, "
                . "cnpj = :cnpj, "
                . "endereco = :endereco, "
                . "idCidade = :idCidade, "
                . "email = :email, "
                . "senha = :senha "
                . "WHERE idCliente = :idCliente");

        $sql->bindValue(':nome', $cliente->getNome());
        $sql->bindValue(':cnpj', $cliente->getCnpj());
        $sql->bindValue(':endereco', $cliente->getEndereco());
        $sql->bindValue(':idCidade', $cliente->getIdCidade());
        $sql->bindValue(':email', $cliente->getEmail());
        $sql->bindValue(':senha', $cliente->getSenha());
        $sql->bindValue(':idCliente', $cliente->getIdCliente());


        $sql->execute();
    }

    public function getCidade($idCidade) {
        $sql = $this->con->prepare("SELECT cidade, estado FROM cidades WHERE idCidade = :idCidade");

        $sql->bindValue(':idCidade', $idCidade);
        $sql->execute();
        return $sql->fetch(PDO::FETCH_OBJ);
    }

    public function getCompras(){
        $usuario = $_SESSION['usuario'];
        $idCliente = $usuario->idCliente;
        
        $sql = $this->con->prepare("SELECT * FROM compras WHERE idCliente = :idCliente");

        $sql->bindValue(':idCliente', $idCliente);
        $sql->execute();
        
        $lista = array();

        while($compra = $sql->fetch(PDO::FETCH_OBJ)){
            $lista[] = $compra;
        }
        return $lista;
    }

}
?>

