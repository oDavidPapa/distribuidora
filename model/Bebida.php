<?php
    class Bebida{
        private $idBebida;
        private $nome;
        private $volume;
        private $preco;
        private $quantidadeEstoque;
        private $fabricante;

        public function Bebida($pIdBebida, $pNome, $pVolume, $pPreco, $pQdeEstoque, $pFabricante){
            $this->idBebida = $pIdBebida;
            $this->nome = $pNome;
            $this->volume = $pVolume;
            $this->preco = $pPreco;
            $this->quantidadeEstoque = $pQdeEstoque;
            $this->fabricante = $pFabricante;
        }

        public function getIdBebida(){
            return $this->idBebida;
        }
        public function setIdBebida($pIdBebida){
            $this->idBebida = $pIdBebida;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome($pNome){
            $this->nome = $pNome;
        }

        public function getVolume(){
            return $this->volume;
        }
        public function setVolume($pVolume){
            $this->volume = $pVolume;
        }

        public function getPreco(){
            return $this->preco;
        }
        public function setPreco($pPreco){
            $this->preco = $pPreco;
        }

        public function getQdeEstoque(){
            return $this->quantidadeEstoque;
        }
        public function setQdeEstoque($pQdeEstoque){
            $this->quantidadeEstoque = $pQdeEstoque;
        }

        public function getFabricante(){
            return $this->fabricante;
        }
        public function setFabricante($pFabricante){
            $this->fabricante = $pFabricante;
        }
    }
?>