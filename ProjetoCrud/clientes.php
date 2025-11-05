<?php
include_once "config.inc.php";

// --- INSERIR ---
if (isset($_POST['acao']) && $_POST['acao'] === 'inserir') {
    $cliente = $_POST['cliente'];
    $cidade  = $_POST['cidade'];
    $estado  = $_POST['estado'];

    $sql = "INSERT INTO clientes (cliente, cidade, estado) VALUES ('$cliente', '$cidade', '$estado')";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar cliente: " . mysqli_error($conexao);
    }
}

// --- LISTAR ---
if (isset($_GET['acao']) && $_GET['acao'] === 'listar') {
    $sql = "SELECT * FROM clientes";
    $resultado = mysqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        while ($dados = mysqli_fetch_array($resultado)) {
            echo "============================<br>";
            echo "ID: " . $dados['id'] . "<br>";
            echo "Cliente: " . $dados['cliente'] . "<br>";
            echo "Cidade: " . $dados['cidade'] . "<br>";
            echo "Estado: " . $dados['estado'] . "<br>";
        }
    } else {
        echo "Nenhum cliente encontrado!";
    }
}

// --- ATUALIZAR ---
if (isset($_POST['acao']) && $_POST['acao'] === 'atualizar') {
    $id      = $_POST['id'];
    $cliente = $_POST['cliente'];
    $cidade  = $_POST['cidade'];
    $estado  = $_POST['estado'];

    $sql = "UPDATE clientes SET cliente='$cliente', cidade='$cidade', estado='$estado' WHERE id=$id";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo "Cliente atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar cliente: " . mysqli_error($conexao);
    }
}

// --- DELETAR ---
if (isset($_POST['acao']) && $_POST['acao'] === 'deletar') {
    $id = $_POST['id'];

    $sql = "DELETE FROM clientes WHERE id=$id";
    $resultado = mysqli_query($conexao, $sql);

    if ($resultado) {
        echo "Cliente deletado com sucesso!";
    } else {
        echo "Erro ao deletar cliente: " . mysqli_error($conexao);
    }
}

mysqli_close($conexao);
?>
