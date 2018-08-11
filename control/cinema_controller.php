<?php

    include_once("../model/cinema.php");

    function getAllCinemasController() {
        $res = getAllCinemasModel();
        return $res;
    }

    function getOneCinemasController($id) {
        $res = getOneCinemasModel($id);
        return $res;
    }

    function addCinemasController($cinema) {
        $res = addCinemasModel($cinema);
        return $res;
    }

    function updateCinemaController($id, $editar_cinema) {
        $res = updateCinemaModel($id, $editar_cinema);
        return $res;
    }

    function deleteCinemaController($id) {
        $res = deleteCinemaModel($id);
        return $res;
    }

    if(isset($_POST["cinema"])){
        $cinema = $_POST["cinema"];
        
        if(addCinemasController($cinema)){
            header("location: ../view/listar_cinema.php"); die('Erro ao tentar executar o comando');
        }
    }

        if(isset($_POST["editar_cinema"]) and $_POST["Id_Cinema"]){
        $editar_cinema = $_POST["editar_cinema"];
        $id = $_POST["Id_Cinema"];
        
        if(updateCinemaController($id, $editar_cinema)){
            header("location: ../view/listar_cinema.php"); die('Erro ao tentar executar o comando');
        }
    }
?>