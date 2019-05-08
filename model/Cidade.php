<?php
    class Cidade{
        private $idCidade;
        private $cidade;
        private $estado;
        private $CEP;
        private $valorFreteVolume;

        public function Cidade($pCidade, $pEstado, $pCEP, $pValorFrete){
            $this->cidade = $pCidade;
            $this->estado = $pEstado;
            $this->CEP = $pCEP;
            $this->valorFreteVolume = $pValorFrete;
        }

        public function getIdCidade(){
            return $this->idCidade;
        }
        public function setIdCidade($pIdCidade){
            $this->idCidade = $pIdCidade;
        }

        public function getCidade(){
            return $this->cidade;
        }
        public function setCidade($pCidade){
            $this->cidade = $pCidade;
        }

        public function getEstado(){
            return $this->estado;
        }
        public function setEstado($pEstado){
            $this->estado = $pEstado;
        }

        public function getCEP(){
            return $this->CEP;
        }
        public function setCEP($pCEP){
            $this->CEP = $pCEP;
        }

        public function getValorFreteVolume(){
            return $this->valorFreteVolume;
        }
        public function setValorFreteVolume($pValorFrete){
            $this->valorFreteVolume = $pValorFrete;
        }
    }
?>