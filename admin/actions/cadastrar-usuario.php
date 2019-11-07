<?php 
    require_once "includes/conexao.php"; // ONDE É  FEITA A CONEXAO Q É UTILIZADA PELO CADASTRO //
    require_once "model/usuario.class.php"; //CRIAÇÃO DA CLASSE CLIENTE//
    require_once "dao/usuario.dao.php"; //ARQUIVO QUE INSERE NO BANCO DE DADOS//
    if($_POST){
    try{
        $obj = new Usuario(); //FUNÇÃO QUE ESTAR DENTRO MODEL//
        $obj->setNome($_POST["nome"]);
        $obj->setLogin($_POST["login"]);
        $obj->setSenha($_POST["senha"]);


        
        $DAO = new DAOUsuario();
        $msg = $DAO->cadastrar($obj); //FUNÇÃO QUE ESTAR DENTRO DO DAO//
    }catch(Exception $e){
        $msg = $e->getMessage();
    }
}
?>