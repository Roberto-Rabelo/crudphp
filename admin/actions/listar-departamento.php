<?php 
    require_once "includes/conexao.php";
    require_once "dao/departamento.dao.php";

    $obj = new DAODepartamento();
    $lista = $obj->listarDepartamento();
?>
