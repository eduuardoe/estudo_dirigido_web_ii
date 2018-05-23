<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
?>

<?php

    $id = $_POST['id'];
    $territorio = buscaterritorio($conexao, $id);
    removeterritorio($conexao, $id);

    header("Location: territorio-lista.php?removido=true&territorio={$territorio[Descricaoterritorio]}");
    die();

    ?>