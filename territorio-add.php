<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");

    $idt = $_POST["id"];
    $nome = $_POST["descricao"];
    $idr = $_POST["idr"];

    if (insereterritorio($conexao, $idt, $nome, $idr)) { ?>
        <p class="text-success">O território <?=$nome?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O território <?=$nome?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>
