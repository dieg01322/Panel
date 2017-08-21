<?php

$page = (isset($_GET['page'])) ? $_GET['page'] : '';
switch ($page){

    case 'usuarios';
        include "pages/usuarios.php";
    break;

    case 'cabecalho';
        include "pages/cabecalho.php";
    break;

    case 'solucoes';
        include "pages/solucoes.php";
    break;

    case 'portfolio';
        include "pages/portfolio.php";
    break;

    case 'clientes';
        include "pages/clientes.php";
    break;
    
    case 'usuarios';
        include "pages/usuarios.php";
    break;
        
    case 'alteracoes';
        include "pages/alteracoes.php";
    break;

    case 'rodape';
        include "pages/rodape.php";
    break;
        
    case 'sair';
        if (isset($_SESSION)) session_destroy();
        header("Location: login.php");
        exit;
    break;

    default:
        include ("pages/home.php");
    break;
}