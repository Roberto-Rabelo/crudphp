<?php
    class Produto{
        private $id;
        private $nome;
        private $preco;
        private $descricao;
        private $departamento; //objeto ja existente ($id e $nome $email)

        public function __construct(){
        }

        public function getId(){
            return $this->id;
        }
    
        public function setId($id){
            $this->id = $id;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getPreco(){
            return $this->preco;
        }
    
        public function setPreco($preco){
            $this->preco = $preco;
        }
    
        public function getDescricao(){
            return $this->descricao;
        }
    
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
        public function getDepartamento(){
            return $this->Departamento;
        }
    
        public function setDepartamento($Departamento){
            $this->Departamento = $Departamento;
        }
    }

?>
