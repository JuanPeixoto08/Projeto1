<?php
    require_once "config.inc.php";
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM produtos WHERE id = $id";
    $resultado = mysqli_query($conexao, $sql);

    while ($produto = mysqli_fetch_array($resultado)){
        $id = $produto['id'];
        $nome = $produto['nome'];
        $preco = $produto['preco'];
        $descricao = $produto['descricao'];
    }
?>

<form action="?pg=altera_produtos" method="post">
    <input type="hidden" name="id" value="<?=$id?>">
    <label>Nome do produto:</label>
    <input type="text" name="nome" value="<?=$nome?>">
    <label>Preço:</label>
    <input type="text" name="preco" value="<?=$preco?>">
    <label>Descrição:</label>
    <input type="text" name="descricao" value="<?=$descricao?>">
    <input type="submit" value="Cadastrar">
</form>