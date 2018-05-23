<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
?>

<?php
    $id = $_POST["id"];
    $descricao = $_POST["descricao"];
    $idr = $_POST["idr"];

    if (alteraterritorio($conexao, $id, $descricao, $idr)) {
        ?>
            <p class="text-success">O território <?=$descricao?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">O território <?=$descricao?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>