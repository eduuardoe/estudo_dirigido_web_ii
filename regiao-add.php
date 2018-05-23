<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");


    $nome = $_POST["descricao"];

    if (insereregiao($conexao, $nome)) { ?>
        <p class="text-success">A região <?=$nome?>, foi adicionada com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">A região <?=$nome?>, não foi adicionada no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>
