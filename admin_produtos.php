<p>
    <a href="?pg=form_produtos"> Cadastrar novo produto</a>
</p>

<h2>Lista de Produtos</h2>

<?php
require_once "config.inc.php";

$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {

    while ($dados = mysqli_fetch_array($resultado)) {
        echo "<div style='border:1px solid #ccc; padding:10px; margin-bottom:10px; border-radius:6px;'>";
        echo "<strong>ID:</strong> {$dados['id']}<br>";
        echo "<strong>Nome:</strong> {$dados['nome']}<br>";
        echo "<strong>Preço:</strong> R$ " . number_format($dados['preco'], 2, ',', '.') . "<br>";
        echo "<strong>Descrição:</strong> {$dados['descricao']}<br>";
        echo "<a href='?pg=form_produtos_alterar&id={$dados['id']}'> Alterar</a> | ";
        echo "<a href='?pg=delete_produtos&id={$dados['id']}'> Excluir</a>";
        echo "</div>";
    }

} else {
    echo "<br><h4 style='color:#888;'>Nenhum produto encontrado.</h4><br>";
}
?>
