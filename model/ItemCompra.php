<?php
    class ItemCompra {
       
        private $idItem;
        private $idBebida;
        private $idCompra;
        private $quantidade;
        private $valorItem;
        
        public function ItemCompra() {
            
        }
        
        function getIdItem() {
            return $this->idItem;
        }

        function getIdBebida() {
            return $this->idBebida;
        }

        function getIdCompra() {
            return $this->idCompra;
        }

        function getQuantidade() {
            return $this->quantidade;
        }

        function getValorItem() {
            return $this->valorItem;
        }

        function setIdItem($idItem) {
            $this->idItem = $idItem;
        }

        function setIdBebida($idBebida) {
            $this->idBebida = $idBebida;
        }

        function setIdCompra($idCompra) {
            $this->idCompra = $idCompra;
        }

        function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        function setValorItem($valorItem) {
            $this->valorItem = $valorItem;
        }



    }
?>
