<?php
    if($_POST){
     require_once 'includes/conexao.php';
     require_once 'model/departamento.class.php';
     require_once 'model/produto.class.php';
     require_once 'dao/produto.dao.php';
     try{
         //criando um produto
     $obj = new Produto(); //FUNÇÃO QUE ESTAR DENTRO MODEL//
        $obj->setNome($_POST['nome']);
        $obj->setPreco($_POST['preco']);
        $obj->setDescricao($_POST['descricao']);

        //criando um objeto departamento
        $objdep = new Departamento();
        $objdep->setId($_POST['departamento']);

        //definindo o departamento para produto
        $obj->setDepartamento($objdep); 
        
        $DAO = new DAOProduto();
        $msg = $DAO->cadastrar($obj); //FUNÇÃO QUE ESTAR DENTRO DO DAO//
        
    }catch(Exception $e){
        $msg = $e->getMessage();
    }
}

?>