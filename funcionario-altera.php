<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
?>

<?php
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $sobrenome = $_POST["sobrenome"];
    $titulo = $_POST["titulo"];
    $datanac = $_POST["datanac"];
    $dataadm = $_POST["dataadm"];
    $endereco = $_POST["endereco"];
    $cidade = $_POST["cidade"];
    $pais = $_POST["pais"];

    if (alterafuncionario($conexao, $id, $nome, $sobrenome, $titulo, $datanac, $dataadm, $endereco, $cidade, $pais)) {
        ?>
            <p class="text-success">O Funcionário <?=$nome?> foi alterado com sucesso!</p>
        <?php
    } else {
        $msg = mysqli_error($conexao);
        ?>
            <p class="text-danger">O Funcionário <?=$nome?> não foi alterado com sucesso: <?=$msg?></p>
        <?php
    }

    include_once("rodape.php");

    ?>