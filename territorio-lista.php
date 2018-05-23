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
<a class="btn btn-primary" href="territorio-formulario.php">Cadastrar Território</a> <!-- chama no cadastro -->
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
            
                <a class="btn btn-primary" href="territorio-altera-formulario.php?IDTerritorio=<?=$territorio['IDTerritorio']?>">Alterar</a>

                <form action="territorio-remove.php" method="post">
                    <input type="hidden" name="id" value="<?=$territorio['IDTerritorio']?>" />
                    <button class="btn btn-danger">Remover</button>
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