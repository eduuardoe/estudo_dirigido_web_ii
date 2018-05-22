<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");

    $id = $_GET['IDRegiao'];
    $regiao = buscaregiao($conexao, $id);
 
?>

<h1>Alteração de Região Cadastrado</h1>

<form action="regiao-altera.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>" />
    <table>
        
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao" ><?=$regiao['DescricaoRegiao']?></textarea></td>
        </tr>        

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>
</form>