<?php
session_start();
include_once('./conexao.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$senhabase = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senhabase);
$logado = "0";

$result_usuario = "SELECT * FROM usuarios WHERE nome = '$nome'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
if ($row_usuario['nome'] == "$nome") {
    if ($row_usuario['senha'] == "$senha") {    
        $_SESSION['nome_logado']="$nome";
        $_SESSION['logado']="1";
        setcookie("nome_logado", $nome);
        setcookie("logado",  $_SESSION['logado']);
        header("Location: perfil.php");
        echo "Logado";
    }else {
        $_SESSION['erro']="Nome ou senha não conferem";
        header("Location: login.php");
    }
}else {
    $_SESSION['erro']="Nome ou senha não conferem";
    header("Location: login.php");
}













/* if ($row_usuarios['nome'] == "$nome") {
    echo("nome encontrado");
    if ($row_usuarios['senha'] == "$senha") {
        echo "Você logou com sucesso";
        $_SESSION['nome_logado'] = "$nome";
        $_SESSION['logado'] = "$logado";
        setcookie("nome_logado",$nome);
        setcookie("senha_logado",$senha);
        header('Location: index.php'); 
    
        }else {
            echo " Senha invalida";
        }
}
else {
    echo "Nome ou usuário estão incorretos";
} */

?>