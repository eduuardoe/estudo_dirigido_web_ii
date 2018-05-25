<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("func-territorio-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Funcionário-Território foi removido com sucesso!</p>
<?php } ?>

<tr>
<td>
<a class="btn btn-primary" href="func-territorio-formulario.php">Cadastrar Funcionário - Território</a> <!-- chama no cadastro -->
</td>
</tr>

<table class="table table-striped table-bordered">
    <tr>
        <td>Código Funcionário</td>
        <td>Funcionário</td>
        <td>Território</td>
        <td>Ações</td>
    </tr>
    <?php
        $territorios = listafuncionarios_territorios($conexao);
        foreach ($territorios as $territorio) :
    ?>
        <tr>
            <td><?=$territorio['IDFuncionario']?></td>               
            <td><?=$territorio['Nome']?></td>               
            <td><?=$territorio['DescricaoTerritorio']?></td>
            <td>
            
                <a class="btn btn-primary" href="func-territorio-altera-formulario.php?IDFuncionario=<?=$territorio['IDFuncionario']?>">Alterar</a>

                <form action="func-territorio-remove.php" method="post">
                    <input type="hidden" name="id" value="<?=$territorio['IDFuncionario']?>" />
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