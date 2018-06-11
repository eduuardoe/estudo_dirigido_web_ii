<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Território <?=$_GET['territorio']?> foi removido com sucesso!</p>
<?php } ?>

<tr>
<td>
<a class="btn waves-effect waves-light" href="territorio-formulario.php">Cadastrar Território<i class="tiny material-icons">add</i></a> <!-- chama no cadastro -->
</td>
</tr>

<table class="table table-striped table-bordered">
    <tr>
        <td>Código</td>
        <td>Descrição</td>
        <td>Região</td>
        <td>Ações</td>
    </tr>
    <?php
        $territorios = listaterritorios($conexao);
        foreach ($territorios as $territorio) :
    ?>
        <tr>
            <td><?=$territorio['IDTerritorio']?></td>   
            <td><?=$territorio['DescricaoTerritorio']?></td>
            <td><?=$territorio['DescricaoRegiao']?></td>
            <td>

                <a class="btn waves-effect waves-light" href="territorio-altera-formulario.php?IDTerritorio=<?=$territorio['IDTerritorio']?>">Alterar <i class="tiny material-icons">edit</i></a>


                <form action="territorio-remove.php" method="post">
                    <input type="hidden" name="id" value="<?=$territorio['IDTerritorio']?>" />
                    <button class="btn waves-effect waves-light">Remover<i class="tiny material-icons">clear</i></button>
                </form>
            </td>
        </tr>
    <?php
        endforeach;
    ?>
</table>

<?php
    include_once("rodape.php");
?>