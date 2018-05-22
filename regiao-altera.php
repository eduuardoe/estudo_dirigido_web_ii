<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");
?>

<?php
    $id = $_POST["id"];
    $descricao = $_POST["descricao"];

    if (alteraregiao($conexao, $id, $descricao)) {
        ?>
            <p class="text-success">A região <?=$descricao?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">A região <?=$descricao?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>