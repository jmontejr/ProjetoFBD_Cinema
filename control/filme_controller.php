<?php

    include_once("../model/filme.php");

    function getAllFilmesController() {
        $res = getAllFilmesModel();
        return $res;
    }

    function getOneFilmeController($id) {
        $res = getOneFilmeModel($id);
        return $res;
    }

    function addFilmeController($filme) {
        $res = addFilmeModel($filme);
        return $res;
    }

    
    function updateFilmeController($id, $editar_filme) {
        $res = updateFilmeModel($id, $editar_filme);
        return $res;
    }

    function deleteFilmeController($id) {
        $res = deleteFilmeModel($id);
        return $res;
    }

    if(isset($_POST["filme"])){
        $filme = $_POST["filme"];
        
        if(addFilmeController($filme)){
            header("location: ../view/listar_filme.php"); die('Erro ao tentar executar o comando');
        }
    }

    if(isset($_POST["editar_filme"]) and $_POST["Id_Filme"]){
        $editar_filme = $_POST["editar_filme"];
        $id = $_POST["Id_Filme"];
        
        if(updateFilmeController($id, $editar_filme)){
            header("location: ../view/listar_filme.php"); die('Erro ao tentar executar o comando');
        }
    }

?>