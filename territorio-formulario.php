<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
    include_once("regiao-banco.php");

    $regiaos = listaRegiaos($conexao);
?>

<h1>Cadastro de Território</h1>

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

       <!-- <tr>
            <td>ID Região</td>
            <td><textarea class="form-control" name="idr"></textarea></td>
        </tr> -->
    
        <tr>
            <td>Região</td>
            <td>
                <select name="idr">
                    <?php foreach ($regiaos as $regiao) {
                    ?>
                        <option value="<?=$regiao['IDRegiao']?>"><?=$regiao["DescricaoRegiao"]?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
</form>