<?php
include_once("./conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$result_usuario = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
?>
<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela editor</title>
</head>
<body>
    <div class="header">
        <h1>Tela editor</h1>
        <h3>Bem-vindo ao nosso sistema</h3>
        <form method="post" action="proc_edit_usuario.php">
        <input type="hidden" name="id" placeholder="Seu nome" value="<?php echo $row_usuario['id'];?>">
            Nome:<input type="text" name="nome" placeholder="Seu nome" value="<?php echo $row_usuario['nome'];?>">
            <br><br>
            E-mail:<input type="email" name="email" placeholder="Seu e-mail"  value="<?php echo $row_usuario['email'];?>">
            <br><br>
            Descricao:<input type="text" name="descricacao" placeholder="Sua descricao"  value="<?php echo $row_usuario['Descricao'];?>">
            <br><br>
            <input type="submit" name="Logar" VALUE="Editar">
        </form>
        <p>Volte ao seu perfil clickando <a href="perfil.php">aqui</a></p>
    </div>
</body>
</html>