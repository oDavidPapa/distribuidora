
<?php
    class Conexao{
        private $servidor_mysql ='localhost';
        private $nome_banco ='distribuidora';
        private $usuario ='root';
        private $senha = '';
        private $con;

        public function getConexao(){ //pode tirar o getConexao só deixar Conexao construtor - ai na modelo.inc é so instanciar o objeto!
            $this->con =  new PDO("mysql:host=$this->servidor_mysql;dbname=$this->nome_banco","$this->usuario","$this->senha");
            return $this->con;
        }

    } 
   
?>   