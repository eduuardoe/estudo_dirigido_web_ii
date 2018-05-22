<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");
    //include_once("categorias-banco.php");

    //$categorias = listaCategorias($conexao);
?>

<h1>Cadastro de Região</h1>

<form action="regiao-add.php" method="post">
    <table>
        
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
    
        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
            </td>
        </tr>
    </table>
</form>