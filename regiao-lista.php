<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");
?>

<?php if (array_key_exists("removido", $_GET) && $_GET["removido"]==true) { ?>
    <p class="alert-success">Região <?=$_GET['regiao']?> foi removido com sucesso!</p>
<?php } ?>

<tr>
<td>
<a class="btn waves-effect waves-light" href="regiao-formulario.php">Cadastrar Região<i class="tiny material-icons">add</i></a> <!-- chama no cadastro -->
</td>
</tr>

<table class="table table-striped table-bordered">
    <tr>
        <td>Código</td>
        <td>Descrição</td>
        <td>Ações</td>
    </tr>
    <?php
        $regiaos = listaregiaos($conexao);
        foreach ($regiaos as $regiao) :
    ?>
        <tr>
            <td><?=$regiao['IDRegiao']?></td>   
            <td><?=$regiao['DescricaoRegiao']?></td>
            <td>
            
                <a class="btn waves-effect waves-light" href="regiao-altera-formulario.php?IDRegiao=<?=$regiao['IDRegiao']?>">Alterar <i class="tiny material-icons">edit</i></a>


                <form action="regiao-remove.php" method="post">
                    <input type="hidden" name="id" value="<?=$regiao['IDRegiao']?>" />
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