
<?php
session_start();

if(!isset($_SESSION['usuario'])){
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Bem-vindo</h2>

    <p>
        Usuário logado:
        <strong>
            <?php echo $_SESSION['usuario']; ?>
        </strong>
    </p>

    <a href="logout.php">
        <button>Sair</button>
    </a>
</div>

</body>
</html>
