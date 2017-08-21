<?php

    if (!isset($_SESSION)) session_start();

    $nivel_necessario = 2;

    if (!isset($_SESSION['IdUsuario']) || ($_SESSION['NivelUsuario'] < $nivel_necessario)) {
        session_destroy();
        header("Location: login.php");
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <title>Painel Administrativo</title>
        <meta name="description" content="Sistema ERP − Tupã São Paulo">
        
        <!-- CSS -->
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
  
    </head>
    <body>
        <div id="page"><!-- page -->
       
            <header class="header">
                <div class="header__logo"><img src="img/logo.png" alt="Logo ERP"></div>
                <h1 class="header__title">Painel Principal</h1>
                <div class="header__close"><a href="?page=sair"><img src="img/sair.svg" alt="Botão sair"></a></div>
            </header>
            
            <main role="main" class="conteudo">
                <!--*****************************************************-->
                <!--********************** MENU *************************-->
                <div class="menu">
                    <div class="menu__button"><a href="#menu-principal"><img src="img/pause.svg"></a></div>
                    <nav class="menu__lateral menu__principal" id="menu-principal">
                        <ul>
                            <li class="menu__responsivo"><a href="#" class="menu__voltar">Voltar</a></li>
                            <li><a href="?page=home">Início</a></li>
                            <li><a href="#submenu-cadastros">Cadastros<spam>+</spam></a></li>
                            <li><a href="#submenu-sessoes">Sessões<spam>+</spam></a></li>
                            <li><a href="#submenu-relatorios">Relatórios<spam>+</spam></a></li>
                        </ul>   
                    </nav>
                    <!--*****************************************************-->
                    <nav class="menu__lateral menu__sub" id="submenu-cadastros">
                        <ul>
                            <li><a href="#" class="menu__voltar">Voltar</a></li>
                            <li><a href="?page=usuarios">Usuário</a></li>
                        </ul>   
                    </nav>
                    <nav class="menu__lateral menu__sub" id="submenu-sessoes">
                        <ul>
                            <li><a href="#" class="menu__voltar">Voltar</a></li>
                            <li><a href="?page=cabecalho">Cabeçalho</a></li>
                            <li><a href="?page=solucoes">Soluções</a></li>
                            <li><a href="?page=portfolio">Portfólio</a></li>
                            <li><a href="?page=clientes">Clientes</a></li>
                            <li><a href="?page=rodape">Rodapé</a></li>
                        </ul>   
                    </nav>   
                    <nav class="menu__lateral menu__sub" id="submenu-relatorios">
                        <ul>
                            <li><a href="#" class="menu__voltar">Voltar</a></li>
                            <li><a href="?page=relUsuarios">Usuários</a></li>
                            <li><a href="?page=alteracoes">Alterações</a></li>
                        </ul>   
                    </nav>                                                                           
                </div>
                
                <?php include "funcoes/pages.php"; ?>
            </main>
            
            <footer>
                <small>&copy; Tecsoft - Todos os direitos reservados 2017.</small>
            </footer>
            
        </div><!-- page -->

    </body>
</html>