<?php
    class Compra{
        
        private $idCompra;
        private $idCliente;
        private $dataCompra;
        private $valorTotal;
        private $valorFrete;
        private $itens;

        
        
        public function Compra() {
            
        }
        
        function getIdCompra() {
            return $this->idCompra;
        }

        function getIdCliente() {
            return $this->idCliente;
        }

        function getDataCompra() {
            return $this->dataCompra;
        }

        function getValorTotal() {
            return $this->valorTotal;
        }

        function getValorFrete() {
            return $this->valorFrete;
        }

        function setIdCompra($idCompra) {
            $this->idCompra = $idCompra;
        }

        function setIdCliente($idCliente) {
            $this->idCliente = $idCliente;
        }

        function setDataCompra($dataCompra) {
            $this->dataCompra = $dataCompra;
        }

        function setValorTotal($valorTotal) {
            $this->valorTotal = $valorTotal;
        }

        function setValorFrete($valorFrete) {
            $this->valorFrete = $valorFrete;
        }

        function getItens() {
            return $this->itens;
        }

        function setItens($itens) {
            $this->itens = $itens;
        }



    }
?>

