<?php
session_start();
include_once("./conexao.php");
$nome = $_SESSION["nome_logado"];
echo $nome;
$result_usuario = "SELECT * FROM usuarios WHERE nome = '$nome'";
$resultado_usuario = mysqli_query($conn, $result_usuario);
$row_usuario = mysqli_fetch_assoc($resultado_usuario);
if (isset($_SESSION["logado"]) == "1") {
    
}else {
    $_SESSION["nao-logado"]="Faça o login para acessar seu perfil";
    header("Location: login.php");
}

if ($nome == "Guimaraes") {
    
}else {
 header("
 <script>
 alert('Você não tem permissão');
 </script>
 ");
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
    <title>Jornal php</title>
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
                    <a href="perfil.php">Perfil</a>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid padding">
    <div class="row">
        <div class="d-flex justify-content-center">
    <div class="col-6 registro">
         <div class="titulo-registro">Postagem</div>
            <?php
                if (isset($_SESSION['postado'])) {
                    echo "
                    <div class='alert alert-primary' role='alert'>
                    A noticia foi postada com sucesso
                    </div>
                    ";
                    unset($_SESSION['postado']);
                }
            ?>
         <div class="form-registro">

        <form action="postando.php" method="POST">
            Autor: <input type="text" name="autor" disabled="true" name="<?php echo $nome;?>" value="<?php echo $nome;?>"><br><br>
            Titulo:<input type="text" name="titulo" placeholder="Título da postagem"><br><br>
            Descricao:<input type="text" name="descricao" placeholder="Descricao"><br><br> 
            Link da imagem:<input type="text" name="link" placeholder="Link da imagem"><br><br>      
            <input type="submit" value="postar">
        </form>

        </div>
        </div>
    </div>
    </div>
</div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>