<?php

class Cliente {

    private $idCliente;
    private $nome;
    private $cnpj;
    private $endereco;
    private $idCidade;
    private $email;
    private $senha;
    

    function Cliente($nome, $cnpj, $endereco, $idCidade, $email, $senha) {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
        $this->endereco = $endereco;
        $this->idCidade = $idCidade;
        $this->email = $email;
        $this->senha = $senha;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getIdCidade() {
        return $this->idCidade;
    }

    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setIdCidade($idCidade) {
        $this->idCidade = $idCidade;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

}

?>
