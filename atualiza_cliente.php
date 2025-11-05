<?php
require_once "config.inc.php";

$id = $_POST['id'];
$cliente = $_POST['cliente'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];

$sql = "UPDATE clientes SET cliente='$cliente', cidade='$cidade', estado='$estado' WHERE id=$id";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "<h2>Cliente atualizado com sucesso!</h2>";
} else {
    echo "<h2>Erro ao atualizar cliente!</h2>";
}

echo "<br><a href='?pg=admin_clientes'>Voltar à lista</a>";

mysqli_close($conexao);
?>
