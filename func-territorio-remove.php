<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func-territorio-banco.php");
?>

<?php

    $id = $_POST['id'];
    $territorio = buscafuncterritorio($conexao, $id);
    removefuncterritorio($conexao, $id);

    header("Location: func-territorio-lista.php?removido=true&functerritorio={$territorio[IDFuncionario]}");
    die();

    ?>