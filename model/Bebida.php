<?php
    class Bebida{
        private $idBebida;
        private $nome;
        private $volume;
        private $preco;
        private $quantidadeEstoque;
        private $fabricante;

       public function Bebida($idBebida, $nome, $volume, $preco, $quantidadeEstoque, $fabricante) {
            $this->idBebida = $idBebida;
            $this->nome = $nome;
            $this->volume = $volume;
            $this->preco = $preco;
            $this->quantidadeEstoque = $quantidadeEstoque;
            $this->fabricante = $fabricante;
        }

        function getIdBebida() {
            return $this->idBebida;
        }

        function getNome() {
            return $this->nome;
        }

        function getVolume() {
            return $this->volume;
        }

        function getPreco() {
            return $this->preco;
        }

        function getQuantidadeEstoque() {
            return $this->quantidadeEstoque;
        }

        function getFabricante() {
            return $this->fabricante;
        }


        function setIdBebida($idBebida) {
            $this->idBebida = $idBebida;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

        function setVolume($volume) {
            $this->volume = $volume;
        }

        function setPreco($preco) {
            $this->preco = $preco;
        }

        function setQuantidadeEstoque($quantidadeEstoque) {
            $this->quantidadeEstoque = $quantidadeEstoque;
        }

        function setFabricante($fabricante) {
            $this->fabricante = $fabricante;
        }

    }
?>