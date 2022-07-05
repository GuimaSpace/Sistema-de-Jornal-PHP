<?php
session_start();
include_once("./conexao.php");
$autor = $_SESSION["nome_logado"];
$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$link =  filter_input(INPUT_POST, 'link', FILTER_SANITIZE_STRING);

echo $autor;
echo $titulo;
echo $descricao;
echo $link;

$result_postagem = "INSERT INTO postagem (autor, titulo, descricao, link, created) VALUE('$autor', '$titulo', '$descricao', '$link', NOW())";
$resultado_postagem = mysqli_query($conn, $result_postagem);
echo ("<script>Postagem realizado.');</script>");
$_SESSION['postado']="A noticia foi postada com sucesso.";
header("location: postar.php");

?>