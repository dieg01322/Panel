<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="device-width, initial-scale=1.0">
        <title>Login</title>
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
            </header>
            
            <main role="main" class="conteudo">
                <!--*****************************************************-->
                <!--********************** LOGIN ************************-->
                <div id="usuario"><!-- login -->
                    <form class="usuario__form" action="funcoes/validacao.php" method="post">
                        <h2>LOGIN</h2>
                        <div class="usuario__input">
                            <label for="usuario">Usuário</label>
                            <input type="text" name="usuario"><br/>
                        </div>
                        <div class="usuario__input">
                            <label for="senha">Senha</label>
                            <input type="password" name="senha"><br/>
                        </div>
                        <input class="usuario__button" type="submit" value="Entrar">
                    </form>     
                </div><!-- login -->
            </main>
            
            <footer>
                <small>&copy; Tecsoft - Todos os direitos reservados 2017.</small>
            </footer>
            
        </div><!-- page -->

    </body>
</html>