<?php
    
    include_once('Conexao.php');
    include_once('../distribuidora/model/Bebida.php');

    class BebidaDAO{
        
        private $con;

        /*------- Instanciando o objeto conexão -------*/
        public function BebidaDAO(){
            $c = new Conexao();
            $this->con = $c->getConexao(); 
        }

        /* Inserindo os valores via bindValue no BD */
        
        public function incluirBebida(Bebida $bebida){
            $sql = $this->con->prepare("INSERT INTO bebidas(idBebida,nome,volume,preco,quantidadeEstoque,fabricante)"
                    . "VALUES(:idBebida,:nome,:volume,:preco,:qtdEstoque,:fabricante)");    
            
            $sql->bindValue(':idBebida', $bebida->getIdBebida());
            $sql->bindValue(':nome',$bebida->getNome());
            $sql->bindValue(':volume',$bebida->getVolume());
            $sql->bindValue(':preco',$bebida->getPreco());
            $sql->bindValue(':qtdEstoque',$bebida->getQuantidadeEstoque());
            $sql->bindValue(':fabricante',$bebida->getFabricante());
            
            //var_dump($sql);
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
            $sql = $this->con->prepare("SELECT * FROM bebidas WHERE idBebida = :idBebida");
            $sql->bindValue(':idBebida', $idBebida);
            $sql->execute();

            return $sql->fetch(PDO::FETCH_OBJ);
        }

        /* Exclui a bebida do id correspondente que foi passado como parâmetro */
        
        public function excluirBebida($idBebida){
            $sql = $this->con->prepare("DELETE FROM bebidas WHERE idBebida = :idBebida");
            
            $sql->bindValue(':idBebida',$idBebida);
            $sql->execute();
        }

        /* Atualizará alguns campos das bebidas no BD */
        
        public function atualizarBebida(Bebida $bebida){
            $sql = $this->con->prepare("UPDATE bebidas "
                    . "SET idBebida = :idBebida, "
                    . "nome = :nome, "
                    . "volume = :volume, "
                    . "preco = :preco, "
                    . "quantidadeEstoque = :qtdEstoque, "
                    . "fabricante = :fabricante "
                    . "WHERE idBebida = :idBebida");

            $sql->bindValue(':idBebida', $bebida->getIdBebida());
            $sql->bindValue(':nome',$bebida->getNome());
            $sql->bindValue(':volume',$bebida->getVolume());
            $sql->bindValue(':preco',$bebida->getPreco());
            $sql->bindValue(':qtdEstoque',$bebida->getQuantidadeEstoque());
            $sql->bindValue(':fabricante',$bebida->getFabricante());
            
           // var_dump($sql);
            $sql->execute();
        }   
    }

?>        