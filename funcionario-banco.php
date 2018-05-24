<?php
    function listafuncionarios($conn) {
        $funcionarios = array();

        $sql = "select IDFuncionario, Nome, Sobrenome, Titulo, DataNac, DataAdmissao, Endereco, Cidade, Pais from Funcionarios";
        $resultado = mysqli_query($conn, $sql);

        while ($funcionario = mysqli_fetch_assoc($resultado)) {
            array_push($funcionarios, $funcionario);
        }
        //mysqli_fetch_all($resultado)

        return $funcionarios;
    }

    function inserefuncionario($conn, $nome, $sobrenome, $titulo, $datanac, $dataadm, $endereco, $cidade, $pais) {
        $query = "insert into Funcionarios (Nome,Sobrenome,Titulo,DataNac,DataAdmissao,Endereco,Cidade,Pais) values ('{$nome}', '{$sobrenome}', '{$titulo}', '{$datanac}', '{$dataadm}', '{$endereco}', '{$cidade}', '{$pais}')";
        return mysqli_query($conn, $query);
    }

    function alterafuncionario($conn,$id,$nome, $sobrenome, $titulo, $datanac, $dataadm, $endereco, $cidade, $pais) {
        $query = "update Funcionarios set Nome = '{$nome}', Sobrenome =  '{$sobrenome}', Titulo = '{$titulo}', DataNac = '{$datanac}', DataAdmissao = '{$dataadm}', Endereco = '{$endereco}', Cidade = '{$cidade}', Pais = '{$pais}' where idFuncionario = {$id}";
        return mysqli_query($conn, $query);
    }

    function removefuncionario($conn, $id) {
        $query = "delete from Funcionarios where IDFuncionario = {$id}";
        return mysqli_query($conn, $query);
    }

    function buscafuncionario($conn, $id) {
        $query = "select * from Funcionarios where idfuncionario = {$id}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>