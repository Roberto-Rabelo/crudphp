<?php 
    require_once "includes/conexao.php";
    require_once "dao/usuario.dao.php";

    $obj = new DAOUsuario();
    $lista = $obj->listarUsuario();
?>