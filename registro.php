<!DOCTYPE html>
<html lang="en">
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
         <div class="titulo-registro">REGISTRO</div>
         <div class="form-registro">
            <form method="post" action="cadastrando.php">
                <input type="text" name="nome" placeholder="Seu nome..."><br><br>
                <input type="email" name="email" placeholder="Seu Email..."><br><br>
                <input type="password" name="senha" placeholder="Sua senha..."><br><br>
                <input type="submit" value="Cadastrar">
            </form>
            <p>Ja possui uma conta? entre clickando <a href="login.php">Aqui</a></p>
            
        </div>
        </div>
    </div>
    </div>
</div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>