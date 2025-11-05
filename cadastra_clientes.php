<?php
require_once "config.inc.php";

$cliente = $_POST['cliente'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "INSERT INTO clientes (cliente, cidade, estado)
        VALUES ('$cliente', '$cidade', '$estado')";

$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "<h2>Cliente cadastrado com sucesso!</h2>";
} else {
    echo "<h2>Erro ao cadastrar cliente!</h2>";
}

echo "<br><a href='?pg=admin_clientes'>Ver Clientes</a>";

mysqli_close($conexao);
?>
