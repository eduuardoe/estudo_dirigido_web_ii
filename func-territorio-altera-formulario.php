<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");

    $id = $_GET['IDTerritorio'];
    $territorio = buscaterritorio($conexao, $id);
 
?>

<h1>Alteração de Território Cadastrado</h1>

<form action="territorio-altera.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>" />
    <table>
        
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao" ><?=$territorio['DescricaoTerritorio']?></textarea></td>
        </tr> 

        <tr>
            <td>ID Região</td>
            <td><textarea class="form-control" name="idr" ><?=$territorio['IDRegiao']?></textarea></td>
        </tr>         

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>
</form>