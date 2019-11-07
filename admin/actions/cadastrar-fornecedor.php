<?php 
    require_once "includes/conexao.php"; // ONDE É  FEITA A CONEXAO Q É UTILIZADA PELO CADASTRO //
    require_once "model/fornecedor.class.php"; //CRIAÇÃO DA CLASSE CLIENTE//
    require_once "dao/fornecedor.dao.php"; //ARQUIVO QUE INSERE NO BANCO DE DADOS//
    if($_POST){
    try{
        $obj = new Fornecedor(); //FUNÇÃO QUE ESTAR DENTRO MODEL//
        $obj->setNome($_POST["nome"]);
        $obj->setCidade($_POST["cidade"]);
        $obj->setEstado($_POST["estado"]);
        $obj->setCnpj($_POST["cnpj"]);


        
        $DAO = new DAOfornecedor();
        $msg = $DAO->cadastrar($obj); //FUNÇÃO QUE ESTAR DENTRO DO DAO//
    }catch(Exception $e){
        $msg = $e->getMessage();
    }
}
?>