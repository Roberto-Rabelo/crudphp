<?php
if($_GET['id']){
    require_once 'includes/conexao.php';
    require_once 'model/cliente.class.php';
    require_once 'dao/cliente.dao.php';

    try{
        $DAO = new DAOCliente();
        $cliente = $DAO->buscarPorId($_GET['id']);

    }catch(Expection $e){
        $msg = $e->getMessage();
    }
}


?>