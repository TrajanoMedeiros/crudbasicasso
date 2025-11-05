<?php
require_once "config.inc.php";

$id = $_GET['id'];

$sql = "DELETE FROM clientes WHERE id = $id";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
    echo "<h2>Cliente deletado com sucesso!</h2>";
} else {
    echo "<h2>Erro ao deletar cliente!</h2>";
}

echo "<br><a href='?pg=admin_clientes'>Voltar à lista</a>";

mysqli_close($conexao);
?>
