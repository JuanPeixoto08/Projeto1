<?php

    require_once "admin/config.inc.php";
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query($conexao, $sql);

?>
<div class="container mt-5 mb-5">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Produtos vendidos pela Empresa</h2>
        <p class="text-muted">Conheça nossos produtos disponíveis e seus respectivos valores</p>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-0">
            <table class="table table-striped table-hover align-middle mb-0">
                <thead class="table-dark text-center">
                    <tr>
                        <th style="width: 25%;">Nome</th>
                        <th style="width: 15%;">Preço</th>
                        <th style="width: 60%;">Descrição</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($produto = mysqli_fetch_array($resultado)) { ?>
                    <tr>
                        <td class="fw-semibold text-center"><?=$produto['nome']?></td>
                        <td class="text-center">R$ <?=number_format($produto['preco'], 2, ',', '.')?></td>
                        <td><?=$produto['descricao']?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
