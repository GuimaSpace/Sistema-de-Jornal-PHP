
<?php
session_start();
include_once("./conexao.php");
$nome = $_SESSION["nome_logado"];
$result_usuario = "SELECT * FROM usuarios WHERE nome = '$nome'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
if (isset($_SESSION["logado"]) == "1") {
    
}else {
    $_SESSION["nao-logado"]="Faça o login para acessar seu perfil";
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="Pt-Br">
<head>
    <!-- BOOTSTRAP CSS -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<!-- CSS CUSTOM --> 
<link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu perfil</title>
</head>
<body>
    <div class="titlejornal">
        GUIMA JORNAL PHP
        <br>
        <hr>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav>
                    <a href="index.php">Home</a>
                    <a href="login.php">Login</a>
                    <a href="registro.php">Registro</a>
                    <a href="postar.php">Postar</a>
                    <a href="painel-adm.php">adm</a>
                </nav>
            </div>
        </div>
    </div>

<div class="container-fluid padding">
    <div class="row">
        <div class="d-flex justify-content-center">
    <div class="col-6 registro">
         <div class="titulo-registro">Seu Perfil</div>
         <div class="form-registro">

         <h1>configurações de perfil</h1>
    <?php
     echo "<hr>";
    echo "Usuário ID: " . $row_usuario['id'] . "<br>" . "Nome: " . $row_usuario['nome'] . " <br> " . "Email: " . $row_usuario ['email'] . " <br> "  . "Data criação: " . $row_usuario['created'];
    echo "<br>Descrição: " . $row_usuario['Descricao'] . "";
    echo "
    <form action='editar_usuario.php' method='post'>
    <input type='text' name='id' value='" . $row_usuario['id'] . "' hidden='true'> 
    <input type='submit' value='Editar Conta'>
    </form>
    ";
    echo "<a href='alterarsenha?=" . $row_usuario['id'] . "'>Alterar Senha</br>"; 
    ?>

        </div>
        </div>
    </div>
    </div>
</div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>
























