<!-- <?php
session_start();
include_once("./conexao.php");

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

echo("$id");
echo("$nome");

    $verificacao = "SELECT * FROM usuarios";
    $verificacao2 = mysqli_query($conn, $verificacao);
    $row_usuarios = mysqli_fetch_assoc($verificacao2);
    if ($row_usuarios['nome'] == $nome) {
        echo ("<script>alert('Já existe um usuário com este nome');</script>");
    }elseif ($row_usuarios['email'] == $email) {
        echo ("<script>alert('O Email já está cadastrado');</script>");
    }else {
        $result_usuario = "UPDATE usuarios SET email='$email', nome='$nome', Descricao='$descricao', modified=NOW() WHERE id='$id'";
        $resultado_usuario = mysqli_query($conn, $result_usuario);
    echo ("<script>alert('Você editou suas configurações com sucesso');</script>");
    $_SESSION['nome'] = "$nome";
    $_SESSION['id'] = "$id";
    setcookie("nome",$nome);
    setcookie("id",$id);
    setcookie("senha",$senha);
    header("./perfil.php");
    }




?>