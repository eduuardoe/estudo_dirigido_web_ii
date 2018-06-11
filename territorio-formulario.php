<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
    include_once("regiao-banco.php");

    $regiaos = listaRegiaos($conexao);
?>

<h3>Cadastro de Território</h3>

<form action="territorio-add.php" method="post">
    <table>
        <tr>
            <td>Código Território</td>
            <td><textarea class="form-control" name="id"></textarea></td>
        </tr>

        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
        <tr>
            <td>Região</td>
            <td>
                <select name="idr" class="browser-default">
                    <?php foreach ($regiaos as $regiao) {
                    ?>
                        <option value="<?=$regiao['IDRegiao']?>"><?=$regiao["DescricaoRegiao"]?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <button class="btn waves-effect waves-light" type="submit">Cadastrar<i class="material-icons right">send</i></button>
            </td>
        </tr>
    </table>
</form>