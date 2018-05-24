<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Funcionário <?=$_GET['funcionario']?> foi removido com sucesso!</p>
<?php } ?>

<tr>
<td>
<a class="btn btn-primary" href="funcionario-formulario.php">Cadastrar Funcionário</a> <!-- chama no cadastro -->
</td>
</tr>

<table class="table table-striped table-bordered">
    <tr>
        <td>Código</td>
        <td>Nome</td>
        <td>Sobrenome</td>
        <td>Titulo</td>
        <td>Data Nasc</td>
        <td>Data Admissão</td>
        <td>Endereço</td>
        <td>Cidade</td>
        <td>País</td>
        <td>Ações</td>
    </tr>
    <?php
        $funcionarios = listafuncionarios($conexao);
        foreach ($funcionarios as $funcionario) :
    ?>
        <tr>
            <td><?=$funcionario['IDFuncionario']?></td>   
            <td><?=$funcionario['Nome']?></td>
            <td><?=$funcionario['Sobrenome']?></td>
            <td><?=$funcionario['Titulo']?></td>
            <td><?=$funcionario['DataNac']?></td>
            <td><?=$funcionario['DataAdmissao']?></td>
            <td><?=$funcionario['Endereco']?></td>
            <td><?=$funcionario['Cidade']?></td>
            <td><?=$funcionario['Pais']?></td>

            <td>
            
                <a class="btn btn-primary" href="funcionario-altera-formulario.php?IDFuncionario=<?=$funcionario['IDFuncionario']?>">Alterar</a>

                <form action="funcionario-remove.php" method="post">
                    <input type="hidden" name="id" value="<?=$funcionario['IDFuncionario']?>" />
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