<?php

    require_once "config.inc.php";

    $sql = "INSERT INTO  produtos (nome, preco, descricao)VALUES (
            '$_POST[nome]','$_POST[preco]','$_POST[descricao]')";

    $execute = mysqli_query($conexao, $sql);

    if ($execute) {
        echo "<br><h2>Produto cadastrado com sucesso!</h2><br>";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }else{
        echo "<h2>Houve um erro ao cadastrar o produto!</h2><br>";
    }