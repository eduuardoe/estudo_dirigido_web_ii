<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
    include_once("funcionario-banco.php");
    include_once("func-territorio-banco.php");

    $territorios = listaterritorios($conexao);
    $funcionarios = listafuncionarios($conexao);
?>

<h1>Cadastro de Funcionário-Território</h1>

<form action="func-territorio-add.php" method="post">
    <table>
        
        <tr>
            <td>Funcionário</td>
            <td>
                <select name="id">
                    <?php foreach ($funcionarios as $funcionario) {
                    ?>
                        <option value="<?=$funcionario['IDFuncionario']?>"><?=$funcionario["Nome"]?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Território</td>
            <td>
                <select name="idt">
                    <?php foreach ($territorios as $territorio) {
                    ?>
                        <option value="<?=$territorio['IDTerritorio']?>"><?=$territorio["DescricaoTerritorio"]?></option>
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