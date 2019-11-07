<?php 
    require_once "includes/conexao.php";
    require_once "dao/fornecedor.dao.php";

    $obj = new DAOFornecedor();
    $lista = $obj->listarFornecedor();
?>
