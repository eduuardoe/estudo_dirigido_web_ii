<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");
?>

<?php

    $id = $_POST['id'];
    $regiao = buscaRegiao($conexao, $id);
    removeregiao($conexao, $id);

    header("Location: regiao-lista.php?removido=true&regiao={$regiao[DescricaoRegiao]}");
    die();

    ?>