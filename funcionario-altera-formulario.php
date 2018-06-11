<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");

    $id = $_GET['IDFuncionario'];
    $funcionario = buscafuncionario($conexao, $id);
 
?>

<h3>Alteração de Funcionário Cadastrado</h3>

<form action="funcionario-altera.php" method="post">
    <input type="hidden" name="id" value="<?=$id?>" />
    <table>
        
        <tr>
            <td>Nome</td>
            <td><textarea class="form-control" name="nome" ><?=$funcionario['Nome']?></textarea></td>
        </tr>  
        <tr>
            <td>Sobrenome</td>
            <td><textarea class="form-control" name="sobrenome" ><?=$funcionario['Sobrenome']?></textarea></td>
        </tr>  
        <tr>
            <td>Titulo</td>
            <td><textarea class="form-control" name="titulo" ><?=$funcionario['Titulo']?></textarea></td>
        </tr>  
        <tr>
            <td>Data Nasc</td>
            <td><textarea class="form-control" name="datanac" ><?=$funcionario['DataNac']?></textarea></td>
        </tr>  
        <tr>
            <td>Data Admissão</td>
            <td><textarea class="form-control" name="dataadm" ><?=$funcionario['DataAdmissao']?></textarea></td>
        </tr>  
        <tr>
            <td>Endereço</td>
            <td><textarea class="form-control" name="endereco" ><?=$funcionario['Endereco']?></textarea></td>
        </tr>  
        <tr>
            <td>Cidade</td>
            <td><textarea class="form-control" name="cidade" ><?=$funcionario['Cidade']?></textarea></td>
        </tr>  
        <tr>
            <td>Pais</td>
            <td><textarea class="form-control" name="pais" ><?=$funcionario['Pais']?></textarea></td>
        </tr>        

        <tr>
            <td>
                <button class="btn btn-primary" type="submit">Alterar</button>
            </td>
        </tr>
    </table>
</form>