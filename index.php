<?php
session_start();
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
    <title>Zona leste times</title>
</head>
<body>
    <div class="titlejornal">
        <h1>ZONA LESTE TIMES</h1>
        <p>O jornal da quebrada</p>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-sm-12">
                <nav>
                <a>
                    <?php
                    echo "Bem-vindo, " . $_COOKIE['nome_logado'] . "";
                    ?>
                    </a>
                    <a href="login.php">Login</a>
                    <a href="registro.php">Registro</a>
                    <a href="postar.php">Postar</a>
                    <a href="painel-adm.php">Painel Adm</a>
                    <a href="perfil.php">Perfil  </a>
                </nav>
            </div>
        </div>
    </div>

    <div class="container-fluid jornal-content">
        
    <?php
    include_once("./conexao.php");
    ?>
    <h1>Ultimas noticias </h1>
    <?php
    $result_postagem = "SELECT * FROM postagem";
    $resultado_postagem = mysqli_query($conn, $result_postagem);
    while ($row_postagem = mysqli_fetch_assoc($resultado_postagem)) {
        echo "
        <div class='row postagem'>
        <div class='col-xl-3 col-md-12 col-sm-12' style='background-image: url(" . $row_postagem['link'] . ");'>";
            
        echo "<br>";
        echo "</div>";
        echo "<div class='col-xl-9 col-sm-12 jornal-content'>";
        echo "Postado por: " . $row_postagem['autor'] . " | Dia:" . $row_postagem['created'] . " <br>";
        echo "" . $row_postagem['descricao'] . "";
        echo "</div>";
        echo "</div>";
    }
    ?>


        
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>