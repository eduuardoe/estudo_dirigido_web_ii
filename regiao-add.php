<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");


    $nome = $_POST["descricao"];

    if (insereregiao($conexao, $nome)) { ?>
        <p class="text-success">O produto <?=$nome?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O produto <?=$nome?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>
