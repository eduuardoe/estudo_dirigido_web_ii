<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func-territorio-banco.php");
?>

<?php
    $id = $_POST["id"];
    $idr = $_POST["idt"];

    if (alterafuncterritorio($conexao, $id, $idr)) {
        ?>
            <p class="text-success">O Funcionário - território <?=$id?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">O Funcionário - território <?=$id?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>