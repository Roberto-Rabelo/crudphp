<?php 
    require_once "includes/conexao.php"; // ONDE É  FEITA A CONEXAO Q É UTILIZADA PELO CADASTRO //
    require_once "model/departamento.class.php"; //CRIAÇÃO DA CLASSE CLIENTE//
    require_once "dao/departamento.dao.php"; //ARQUIVO QUE INSERE NO BANCO DE DADOS//
    if($_POST){
    try{
        $obj = new Departamento(); //FUNÇÃO QUE ESTAR DENTRO MODEL//
        $obj->setNome($_POST["nome"]);
        $obj->setEmail($_POST["email"]);


        
        $DAO = new DAODepartamento();
        $msg = $DAO->cadastrar($obj); //FUNÇÃO QUE ESTAR DENTRO DO DAO//
    }catch(Exception $e){
        $msg = $e->getMessage();
    }
}
?>