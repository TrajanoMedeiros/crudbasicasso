<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Admin - Mercado</title>
     <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav>
    <a href="index.php">Início</a>
    <a href="?pg=form_clientes">Cadastrar Cliente</a>
    <a href="?pg=admin_clientes">Listar Clientes</a>
</nav>

<div class="container">
<?php
    if (isset($_GET['pg'])) {
        include($_GET['pg'] . ".php");
    } else {
        echo "<h2>Bem-vindo ao sistema do Mercado!</h2>";
        echo "<p>Use o menu acima para gerenciar os clientes.</p>";
    }
?>
</div>

</body>
</html>
