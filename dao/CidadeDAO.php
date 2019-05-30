<?php
    include_once('Conexao.php');
    include_once('../distribuidora/model/Cidade.php');
    
    class CidadeDAO{
        
        private $con;

        /*------- Instanciando o objeto conexão -------*/
        
        public function CidadeDAO(){
            $c = new Conexao(); 
            $this->con = $c->getConexao();       
        }

        /* ------- Inserindo via bindValue aprendido em sala -------*/
        
        public function incluirCidade(Cidade $cidade){
            $sql = $this->con->prepare("insert into cidades(cidade,estado,CEP,valorFreteVolume)values(:ci,:es,:cep,:valFreVol)");    
            
            $sql->bindValue(':ci',$cidade->getCidade());
            $sql->bindValue(':es',$cidade->getEstado());
            $sql->bindValue(':cep',$cidade->getCEP());
            $sql->bindValue(':valFreVol',$cidade->getValorFreteVolume());
            
            $sql->execute();
        }

        /* ------- Pega todos as cidades cadasrados no BD e adiciona num array[] via FETCH_OBJ ------- */
        
       public function getCidades(){
            $resultado = $this->con->query("SELECT * FROM cidades");

            $lista = array();

            while($cidade = $resultado->fetch(PDO::FETCH_OBJ)){
                $lista[] = $cidade;
            }
            return $lista;
        }

        /* Traz selecionado somente aquela cidade pelo id correspondente passado */
        
        public function getCidade($idCidade){
            $sql = $this->con->prepare("SELECT * FROM cidades where idCidade = :idCidade");
            $sql->bindValue(':idCidade', $idCidade);
            $sql->execute();

            return $sql->fetch(PDO::FETCH_OBJ);
        }

        /* Exclui a cidade do id correspondente que foi passado como parâmetro */
        
        public function excluirCidade($idCidade){
            $sql = $this->con->prepare("delete from cidades where idCidade = :idCidade");
            
            $sql->bindValue(':idCidade',$idCidade);
            $sql->execute();
        }

        /* Atualizará alguns campos da cidade no BD */
        
        public function atualizarCidade(Cidade $cidade){
            $sql = $this->con->prepare("update cidades set cidade = :ci, estado = :es, CEP = :cep, valorFreteVolume = :valFreVol where idCidade = :idCidade");
            
            $sql->bindValue(':ci',$cidade->getCidade());
            $sql->bindValue(':es',$cidade->getEstado());
            $sql->bindValue(':cep',$cidade->getCEP());
            $sql->bindValue(':valFreVol',$cidade->getValorFreteVolume());
            $sql->bindValue(':idCidade',$cidade->getIdCidade());
            
            $sql->execute();
        }
    }
?>        

