<?php
    include_once('ItemCompra.php');
class Compra{
        private $idCompra;
        private $cliente;
        private $dataCompra;
        private $valorTotal;
        private $valorFrete;
        private ItemCompra $itens[];
        

        public function Compra(){
            $this->dataCompra = date();
            $this->itens = array();
        }

        public function getIdCompra(){
            return $this->idCompra;
        }
        public function setIdCompra($pIdCompra){
            $this->idCompra = $pIdCompra; 
        }

        public function getCliente(){
            return $this->cliente;
        }
        public function setCliente($pCliente){
            $this->cliente = $pCliente; 
        }

        public function getDataCompra(){
            return $this->dataCompra;
        }
        public function setDataCompra($pDataCompra){
            $this->dataCompra =$pDataCompra; 
        }

        public function getValorTotal(){
            return $this->valorTotal;
        }
        public function setValorTotal($pValTotComp){
            $this->valorTotal = $pValTotComp; 
        }

        public function getValorFrete(){
            return $this->valFrete;
        }
        public function setValorFrete($pValFrete){
            $this->valFrete = $pValFrete; 
        }

        public function addItem($item){
            $itens[] = $item;

        }

        public function calcularFrete($pVolume, $pPrecoVol){
            $this->valFrete = $pVolume * $pPrecoVol;
        }
    
    }

?>