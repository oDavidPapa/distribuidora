<?php
    
    include_once('Conexao.php');
    /* mudar o diretorio, tirar a palavra classes*/
    include_once('../model/Compra.php');
    include_once('../model/ItemCompra.php');
    
    class CompraDAO{
        
        private $con;

        /*------- Instanciando o objeto conexão -------*/
        
        public function CompraDAO(){
            $c = new Conexao(); 
            $this->con = $c->getConexao();       
        }

        /* ------- Conversão de data para o formato MYSQL ------- */
        
        public function converteDataMysql($pDataCompra){
            return date('Y-m-d',$pDataCompra);    

        }

        /*continuar com getCliente*/
        private function getCliente($id){
           $sql = $this->con->prepare("SELECT cnpj from clientes where idCliente = :id");
           $sql->bindValue(':id', $id);
           $sql->execute();
           
           $cliente = $sql->fetch(PDO::FETCH_OBJ);
           return $cliente->cnpj;  
        }

        public function getCompras(){
            $rs = $this->con->query("SELECT * FROM compras");
            $lista = array();
            while($row = $rs->fetch(PDO::FETCH_OBJ)){
                $compra = new Compra();
                $compra->setIdCompra($row->idCompra); //fazer com todos os atributos do banco
                $compra->setCliente($row->idCliente); 
                $compra->setDataCompra($row->dataCompra);
                $compra->setValorTotal($row->valorTotal);
                $compra->setValorFrete($row->valorFrete);
                $lista[] = $compra; 
            }
            return $lista;
        }

        public function getCompra($id){
            $rs = $this->con->prepare("SELECT * FROM compras WHERE idCompra = :id");
            
            $sql->bindValue(':id', $id);
            $sql->execute();

            $row = $sql->fetch(PDO::FETCH_OBJ);
    
            $compra = new Compra();
            $compra->setIdCompra($row->idCompra); //fazer com todos os atributos do banco
            $compra->setCliente($row->idCliente); 
            $compra->setDataCompra($row->dataCompra);
            $compra->setValorTotal($row->valorTotal);
            $compra->setValorFrete($row->valorFrete);
            $lista[] = $compra; 
            
            return $compra;
        }

        public function insereItem($item){

        }

        public function insereCompra($compra){

        }
    }
?>        