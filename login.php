<?php
session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$arquivo = "usuarios.json";

$loginValido = false;

if (file_exists($arquivo)) {

    $conteudo = file_get_contents($arquivo);
    $usuarios = json_decode($conteudo, true);

    foreach ($usuarios as $user) {

        if ($user['usuario'] == $usuario && $user['senha'] == $senha) {

            $loginValido = true;
            $_SESSION['usuario'] = $usuario;
            break;
        }
    }
}

if ($loginValido) {

    header("Location: painel.php");
    exit();

} else {

    echo "
    <link rel='stylesheet' href='style.css'>

    <div class='container'>
        <h2 class='erro'>Usuário ou senha inválidos</h2>
        <a href='index.php'>Voltar</a>
    </div>
    ";
}
?>
