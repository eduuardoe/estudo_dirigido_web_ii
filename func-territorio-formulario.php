
<?php
    include_once("cabecalho.php");
    include_once("conecta.php");
    include_once("territorio-banco.php");
    include_once("funcionario-banco.php");
    include_once("func-territorio-banco.php");
    

    $territorios = listaterritorios($conexao);
    $funcionarios = listafuncionarios($conexao);
?>

<h3>Cadastro de Funcionário-Território</h3>

<form action="func-territorio-add.php" method="post">
    <table>
        
        <tr>
            <td>Funcionário</td>
            <td>
                <select name="id" class="browser-default">
                    <?php foreach ($funcionarios as $funcionario) {
                    ?>
                        <option value="<?=$funcionario['IDFuncionario']?>"><?=$funcionario["Nome"]?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Território</td>
            <td>
                <select name="idt" class="browser-default">
                    <?php foreach ($territorios as $territorio) {
                    ?>
                        <option value="<?=$territorio['IDTerritorio']?>"><?=$territorio["DescricaoTerritorio"]?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>                
                <button class="btn waves-effect waves-light" type="submit">Cadastrar<i class="material-icons right">send</i></button>
            </td>
        </tr>
        
    </table>
  
</form>