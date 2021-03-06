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

<a class="btn waves-effect waves-light" href="func-territorio-formulario.php">Cadastrar Funcionário - Território<i class="tiny material-icons">add</i></a> <!-- chama no cadastro -->
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
                <a class="btn waves-effect waves-light" href="func-territorio-altera-formulario.php?IDFuncionario=<?=$territorio['IDFuncionario']?>">Alterar <i class="tiny material-icons">edit</i></a>

                <form action="func-territorio-remove.php" method="post">
                    <input type="hidden" name="id" value="<?=$territorio['IDFuncionario']?>" />
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