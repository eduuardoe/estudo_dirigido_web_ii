<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("funcionario-banco.php");
    
?>

<h3>Cadastro de Funcionário</h3>

<form action="funcionario-add.php" method="post">
    <table>
        
        <tr>
            <td>Nome</td>
            <td><textarea class="form-control" name="nome"></textarea></td>
        </tr>
        <tr>
            <td>Sobrenome</td>
            <td><textarea class="form-control" name="sobrenome"></textarea></td>
        </tr>
        <tr>
            <td>Titulo</td>
            <td><textarea class="form-control" name="titulo"></textarea></td>
        </tr>
        <tr>
            <td>Data Nascimento</td>
            <td><textarea class="form-control" name="datanac"></textarea></td>
        </tr>
        <tr>
            <td>Data Admissão</td>
            <td><textarea class="form-control" name="dataadm"></textarea></td>
        </tr>
        <tr>
            <td>Endereço</td>
            <td><textarea class="form-control" name="endereco"></textarea></td>
        </tr>
        <tr>
            <td>Cidade</td>
            <td><textarea class="form-control" name="cidade"></textarea></td>
        </tr>
        <tr>
            <td>País</td>
            <td><textarea class="form-control" name="pais"></textarea></td>
        </tr>

    
        <tr>
            <td>
                <!--<button class="btn btn-primary" type="submit">Cadastrar</button>-->
                <button class="btn waves-effect waves-light" type="submit">Cadastrar<i class="material-icons right">send</i></button>
            </td>
        </tr>
    </table>
</form>