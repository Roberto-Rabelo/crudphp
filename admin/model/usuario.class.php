<?php
    class Usuario{
        private $idusuario;
        private $login;
        
        private $senha;
        private $nome;

        public function __construct(){
        }

        public function getIdusuario(){
            return $this->id;
        }
    
        public function setIdusuario($idusuario){
            $this->id = $id;
        }
    
        public function getNome(){
            return $this->nome;
        }
    
        public function setNome($nome){
            $this->nome = $nome;
        }
    
        public function getLogin(){
            return $this->login;
        }
    
        public function setLogin($login){
            $this->login = $login;
        }
        public function getSenha(){
            return $this->senha;
        }
    
        public function setSenha($senha){
            $this->senha = $senha;
        }
    
    }

?>
