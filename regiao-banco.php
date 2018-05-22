<?php
    function listaregiaos($conn) {
        $regiaos = array();

        $sql = "select IDRegiao, DescricaoRegiao from Regiao";
        $resultado = mysqli_query($conn, $sql);

        while ($regiao = mysqli_fetch_assoc($resultado)) {
            array_push($regiaos, $regiao);
        }
        //mysqli_fetch_all($resultado)

        return $regiaos;
    }

    function insereregiao($conn, $nome) {
        $query = "insert into regiao (DescricaoRegiao) values ('{$nome}')";
        return mysqli_query($conn, $query);
    }

    function alteraregiao($conn,$id,$nome) {
        $query = "update regiao set DescricaoRegiao = '{$nome}' where idregiao = {$id}";
        return mysqli_query($conn, $query);
    }

    function removeregiao($conn, $id) {
        $query = "delete from regiao where IDRegiao = {$id}";
        return mysqli_query($conn, $query);
    }

    function buscaregiao($conn, $id) {
        $query = "select * from regiao where idregiao = {$id}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>