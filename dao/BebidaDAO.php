<?php
    
    include_once('Conexao.php');
    include_once('../model/Bebida.php');

    class BebidaDAO{
        
        private $con;

        /*------- Instanciando o objeto conexão -------*/
        public function BebidaDAO(){
            $c = new Conexao();
            $this->con = $c->getConexao(); 
        }

        /* Inserindo os valores via bindValue no BD */
        
        public function incluirBebida(Bebida $bebida){
            $sql = $this->con->prepare("insert into bebidas(idBebida,nome,volume,preco,quantidadeEstoque,fabricante)values(:id,:nom,:vol,:pre,:qtdEsto,:fabri)");    
            
            $sql->bindValue(':id', $bebida->getIdBebida());
            $sql->bindValue(':nom',$bebida->getNome());
            $sql->bindValue(':vol',$bebida->getVolume());
            $sql->bindValue(':pre',$bebida->getPreco());
            $sql->bindValue(':qtdEsto',$bebida->getQdeEstoque());
            $sql->bindValue(':fabri',$bebida->getFabricante());
           
            $sql->execute();
        }

        /* Pega todos as bebidas cadasrados no BD e adiciona num array[] via FETCH_OBJ */
        
        public function getBebidas(){
            $resultado = $this->con->query("SELECT * FROM bebidas");

            $lista = array();

            while($bebida = $resultado->fetch(PDO::FETCH_OBJ)){
                $lista[] = $bebida;

            }
            return $lista;
        }

        /* Traz selecionado somente aquela bebida pelo id correspondente passado */
        
        public function getBebida($idBebida){
            $sql = $this->con->prepare("SELECT * FROM bebidas where idBebida = :idBebida");
            $sql->bindValue(':idBebida', $idBebida);
            $sql->execute();

            return $sql->fetch(PDO::FETCH_OBJ);
        }

        /* Exclui a bebida do id correspondente que foi passado como parâmetro */
        
        public function excluirBebida($idBebida){
            $sql = $this->con->prepare("delete from bebidas where idBebida = :idBebida");
            
            $sql->bindValue(':idBebida',$idBebida);
            $sql->execute();
        }

        /* Atualizará alguns campos das bebidas no BD */
        
        public function atualizarBebida(Bebida $bebida){
            $sql = $this->con->prepare("update bebidas set idBebida = :idBebida, nome = :nom, volume = :vol, preco = :pre, quantidadeEstoque = :qtdEsto, fabricante = :fabri where idBebida = :idBebida");

            $sql->bindValue(':idBebida', $bebida->getIdBebida());
            $sql->bindValue(':nom',$bebida->getNome());
            $sql->bindValue(':vol',$bebida->getVolume());
            $sql->bindValue(':pre',$bebida->getPreco());
            $sql->bindValue(':qtdEsto',$bebida->getQdeEstoque());
            $sql->bindValue(':fabri',$bebida->getFabricante());
           
            $sql->execute();
        }   
    }

?>        