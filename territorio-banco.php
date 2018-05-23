<?php
    function listaterritorios($conn) {
        $territorios = array();

        $sql = "select t.IDTerritorio, t.DescricaoTerritorio, r.DescricaoRegiao from territorios t join regiao r on r.IDRegiao = t.IDRegiao order by 1";
        $resultado = mysqli_query($conn, $sql);

        while ($territorio = mysqli_fetch_assoc($resultado)) {
            array_push($territorios, $territorio);
        }
        //mysqli_fetch_all($resultado)

        return $territorios;
    }

    function insereterritorio($conn, $id, $nome, $idr) {
        $query = "insert into territorios (IDTerritorio, DescricaoTerritorio,IDRegiao) values ({$id},'{$nome}',{$idr})";
        return mysqli_query($conn, $query);
    }

    function alteraterritorio($conn,$id,$nome,$idr) {
        $query = "update territorios set DescricaoTerritorio = '{$nome}', IDRegiao = {$idr} where IDTerritorio = {$id}";
        return mysqli_query($conn, $query);
    }

    function removeterritorio($conn, $id) {
        $query = "delete from territorios where IDTerritorio = {$id}";
        return mysqli_query($conn, $query);
    }

    function buscaterritorio($conn, $id) {
        $query = "select * from territorios where IDTerritorio = {$id}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>