<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("regiao-banco.php");
    //include_once("categorias-banco.php");

    //$categorias = listaCategorias($conexao);
?>

<h3>Cadastro de Região</h3>

<form action="regiao-add.php" method="post">
    <table>
        
        <tr>
            <td>Descrição</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
    
        <tr>
            <td>
                <button class="btn waves-effect waves-light" type="submit">Cadastrar<i class="material-icons right">send</i></button>                                
            </td>
        </tr>
    </table>
</form>