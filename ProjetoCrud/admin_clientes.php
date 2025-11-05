<?php
require_once "config.inc.php";

$sql = "SELECT * FROM clientes";
$resultado = mysqli_query($conexao, $sql);
?>

<h2>Lista de Clientes</h2>

<?php
if (mysqli_num_rows($resultado) > 0) {
    while ($dados = mysqli_fetch_array($resultado)) {
        echo "<div style='background:#fff; padding:10px; margin:10px 0; border-radius:5px;'>";
        echo "<strong>ID:</strong> " . $dados['id'] . "<br>";
        echo "<strong>Cliente:</strong> " . $dados['cliente'] . "<br>";
        echo "<strong>Cidade:</strong> " . $dados['cidade'] . "<br>";
        echo "<strong>Estado:</strong> " . $dados['estado'] . "<br>";
        echo "<a href='?pg=form_atualiza_cliente&id=" . $dados['id'] . "'>Editar</a> | ";
        echo "<a href='?pg=deleta_cliente&id=" . $dados['id'] . "' onclick='return confirm(\"Deseja realmente excluir?\")'>Excluir</a>";
        echo "</div>";
    }
} else {
    echo "<p>Nenhum cliente encontrado!</p>";
}

mysqli_close($conexao);
?>
