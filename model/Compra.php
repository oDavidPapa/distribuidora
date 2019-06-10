<?php

class Compra {

    private $idCompra;
    private $cliente;
    private $dataCompra;
    private $valorTotal;
    private $valorFrete;
    private $itens;

    public function Compra($cliente, $valorTotal, $valorFrete) {
        $this->dataCompra = time();
        $this->itens = array();
        $this->cliente = $cliente;
        $this->valorTotal = $valorTotal;
        $this->valorFrete = $valorFrete;
    }

    function getIdCompra() {
        return $this->idCompra;
    }

    function getCliente() {
        return $this->cliente;
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

    function setCliente($cliente) {
        $this->cliente = $cliente;
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

    public function addItem($item) {
        $itens[] = $item;
    }

    public function calcularFrete($pVolume, $pPrecoVol) {
        $this->valFrete = $pVolume * $pPrecoVol;
    }

}

?>