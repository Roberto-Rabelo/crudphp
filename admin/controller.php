<?php 
    // capyutando os dados da url
    //ex.:admin/departamento/cadastrar/listar 
    //model=departamento $ action=listar
    $router = $_GET['model'].$_GET['action'];
    //$route = departamentolistar
    $view = "";

    switch($router){

        case 'departamentocadastrar':
        include "actions/cadastrar-departamento.php";
        $view = "form-departamento.php";
        break;

        case 'departamentolistar':
        include "actions/listar-departamento.php";
        $view = "lista-departamento.php";
        break;

        //admin/actions/cliente/lista
        case 'clientelistar':
        include "actions/listar-cliente.php";
        $view = "lista-cliente.php";
        break;

        //admin/actions/usuario/visualizar/id
        case 'usuariovisualizar':
        include "actions/usuario-buscar-id.php";
        $view = "visualiza-usuario-id.php";
        break;

        case 'produtocadastrar':
        include "actions/cadastrar-produto.php";
        include "actions/listar-departamento.php";
        $view = "form-produto.php";
        break;

        case 'usuariocadastrar':
        include "actions/cadastrar-usuario.php";
        $view = "form-usuario.php";
        break;

        case 'usuariolistar':
        include "actions/listar-usuario.php";
        $view = "lista-usuario.php";
        break;

        //0. verificra se eciste a class produto.class.php 
        //1. criar a view/listar-produto.php  
        //2. criar a actions/produto-listar.php 
        //3. verificiar se em produto.dao possui a função listar 
        case 'produtolistar':
        include "actions/listar-produto.php";
        $view = "lista-produto.php";
        break;

        case 'fornecedocadastrar':
        include "actions/cadastrar-fornecedor.php";
        $view = 'form-fornecedor.php';
        break;

        case 'fornecedolistar':
        include "actions/listar-fornecedor.php";
        $view = 'lista-fornecedor.php';
        break;

        default:
            echo "default";
        break; 
    }

    include "view/header.php";
    include "view/{$view}";
    include "view/mensagem.php";
    include "view/footer.php";
?>
