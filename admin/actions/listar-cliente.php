<?php 
    require_once "includes/conexao.php";
    require_once "dao/cliente.dao.php";

    $obj = new DAOCliente();
    $lista = $obj->listarCliente();
?>
