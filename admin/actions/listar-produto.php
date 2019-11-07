<?php 
    require_once "includes/conexao.php";
    require_once "dao/produto.dao.php";

    $obj = new DAOProduto();
    $lista = $obj->listarProduto();
?>
