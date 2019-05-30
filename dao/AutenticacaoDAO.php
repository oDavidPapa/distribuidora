<?php

include_once('Conexao.php');

class AutenticacaoDAO {

    private $con;

    /* ------- Instanciando o objeto conexão ------- */

    public function AutenticacaoDAO() {
        $c = new Conexao();
        $this->con = $c->getConexao();
    }

    public function autenticar($login, $senha) {
        $sql = $this->con->prepare("SELECT * FROM clientes WHERE email = :login AND senha = :senha");
        $sql->bindValue(':login', $login);
        $sql->bindValue(':senha', $senha);

        $sql->execute();
        if ($sql->fetch(PDO::FETCH_OBJ)) {
            return true;
        }

        return false;
    }

    public function getUsuario($login, $senha) {
        $sql = $this->con->prepare("SELECT * FROM clientes WHERE email = :login AND senha = :senha");
        $sql->bindValue(':login', $login);
        $sql->bindValue(':senha', $senha);

        $sql->execute();

        return $sql->fetch(PDO::FETCH_OBJ);
    }

}

?>