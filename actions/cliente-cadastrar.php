<?php 
    include "admin/model/conexao.php"; // ONDE É  FEITA A CONEXAO Q É UTILIZADA PELO CADASTRO //
    include "admin/model/cliente.class.php"; //CRIAÇÃO DA CLASSE CLIENTE//
    include "admin/dao/cliente.dao.php"; //ARQUIVO QUE INSERE NO BANCO DE DADOS//
    if($_POST){
    try{
        $obj = new Cliente(); //FUNÇÃO QUE ESTAR DENTRO MODEL//
        $obj->setNome($_POST["nome"]);
        $obj->setTelefone($_POST["telefone"]);
        $obj->setEmail($_POST["email"]);
        $obj->setCpf($_POST["cpf"]);
        $obj->setRua($_POST["rua"]);
        $obj->setComplemento($_POST["complemento"]);
        $obj->setCep($_POST["cep"]);
        $obj->setUf($_POST["uf"]);
        $obj->setBairro($_POST["bairro"]);


        $DAO = new DAOCliente();
        $msg = $DAO->cadastrar($obj); //FUNÇÃO QUE ESTAR DENTRO DO DAO//
    }catch(Exception $e){
        $msg = $e->getMessage();
    }
}
?>