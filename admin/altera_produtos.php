<?php

    require_once "config.inc.php";

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];

    $sql = "UPDATE produtos SET
            nome = '$nome',
            preco = '$preco',
            descricao = '$descricao'
            WHERE id = '$id'";

    $resultado = mysqli_query($conexao, $sql);

    if($resultado){
        echo "Produto Alterado com sucesso!";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }else{
        echo "Houve um erro na alteração.";
        echo "<a href='?pg=admin_produtos'>Voltar</a>";
    }