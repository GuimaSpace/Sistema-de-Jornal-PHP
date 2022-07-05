<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senhabase = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senhabase);


/* echo "$nome $email $senha"; */
$verificacao = "SELECT * FROM usuarios";
$verificacao2 = mysqli_query($conn, $verificacao);
$row_usuarios = mysqli_fetch_assoc($verificacao2);
if ($row_usuarios['nome'] == $nome) {
    echo ("<script>alert('O nome já está cadastrado');</script>");
    header("location: registro.php");
}elseif ($row_usuarios['email'] == $email) {
    echo ("<script>alert('O Email já está cadastrado');</script>");
    header("location: registro.php");
}else {
    $result_usuario = "INSERT INTO usuarios (nome, email, senha, created) VALUE('$nome', '$email', '$senha', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);
echo ("<script>alert('Cadastro feito com sucesso, efetue seu login');</script>");
$_SESSION["registrado"]="Você se registrou com sucesso.";
header("location: login.php");
}


?>