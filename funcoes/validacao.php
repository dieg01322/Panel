<?php

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

require 'conexao.php';

if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha'])))
{
    echo 'Preencha os campos corretamente';
}
else		
{
    $bloqueados_usuario = "([-_,_>_`_´_<_~_^_/_?_°_\_:_;_§_|_!_¹_²_ _³_£_¢_¬_§_º_#_%_¨_&_*_+_{_}_*_])";
    if(preg_match($bloqueados_usuario,$usuario) == true)
    {							
        echo 'Caracters não permitidos';
    }
    else
        {	
            $sql = "select id, nome, nivel FROM usuarios WHERE usuario = '". $usuario ."' and senha = '". $senha ."' and ativo = 1 LIMIT 1";
            $rs = mysqli_query($con, $sql);
            $result = mysqli_fetch_array($rs);
            if ($result > 0) {					
                
                if (!isset($_SESSION)) session_start();
                
                $_SESSION['IdUsuario'] = $result["id"];;
                $_SESSION['NomeUsuario'] = $result["nome"];
                $_SESSION['NivelUsuario'] = $result["nivel"];

                header("Location: ../panel.php");

            }
            else {
                echo 'Falha ao tentar se conectar';
            }
    }
}
mysqli_close($con);