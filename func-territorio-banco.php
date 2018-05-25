<?php
    function listafuncionarios_territorios($conn) {
        $territorios = array();

        $sql = "select t.IDFuncionario, f.Nome, r.DescricaoTerritorio from funcionarios_territorios t join territorios r on r.IDTerritorio = t.IDTerritorio join funcionarios f on f.IDFuncionario = t.IDFuncionario ";
        $resultado = mysqli_query($conn, $sql);

        while ($territorio = mysqli_fetch_assoc($resultado)) {
            array_push($territorios, $territorio);
        }
        //mysqli_fetch_all($resultado)

        return $territorios;
    }

    function inserefuncterritorio($conn, $id, $idt) {
        $query = "insert into funcionarios_territorios (IDFuncionario,IDTerritorio) values ({$id},{$idt})";
        return mysqli_query($conn, $query);
    }

    function alterafuncterritorio($conn,$id,$idr) {
        $query = "update funcionarios_territorios set IDTerritorio = {$idr} where IDFuncionario = {$id}";
        return mysqli_query($conn, $query);
    }

    function removefuncterritorio($conn, $id) {
        $query = "delete from funcionarios_territorios where IDFuncionario = {$id}";
        return mysqli_query($conn, $query);
    }

    function buscafuncterritorio($conn, $id) {
        $query = "select * from funcionarios_territorios where IDFuncionario = {$id}";
        $resultado = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($resultado);
    }
?>