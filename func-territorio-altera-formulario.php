<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func-territorio-banco.php");
    include_once("territorio-banco.php");
    include_once("funcionario-banco.php");

    $id = $_GET['IDFuncionario'];

    //$idt = $_GET['IDTerritorio'];

    $functer = buscafuncterritorio($conexao, $id);
    $func = buscafuncionario($conexao, $id);
   // $territorio2 = buscaterritorio($conexao, $functer['IDTerritorio']);
    $territorios = listaTerritorios($conexao);
    
?>

<h1>Alteração de Funcionário - Território Cadastrado</h1>

<form action="func-territorio-altera.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>" />
    <table>
        
        <tr>
            <td>Funcionário </td>
            <td><textarea class="form-control" name="id" readonly="true"><?=$func['Nome']?></textarea></td>
        </tr> 

       <!-- <tr>
            <td>Território</td>
            <td><textarea class="form-control" name="idt2" ><//?=$territorio['DescricaoTerritorio']?></textarea></td>
        </tr>         -->
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
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>
</form>