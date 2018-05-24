<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func-territorio-banco.php");

    $id = $_POST["id"];
    $idt = $_POST["idt"];

    if (inserefuncterritorio($conexao, $id, $idt)) { ?>
        <p class="text-success">O Funcionário-território <?=$id?>, foi adicionado com sucesso!</p>
    <?php } else {
        $msg = mysqli_error($conexao);?>
        <p class="text-danger">O Funcionário-território <?=$nome?>, não foi adicionado no banco de dados: <?=$msg?></p>
    <?php }

?>


<?php include_once("rodape.php"); ?>
