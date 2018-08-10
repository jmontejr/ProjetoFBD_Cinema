<?php

    include_once("../model/genero.php");

    function getAllGenerosController() {
        $res = getAllGenerosModel();
        return $res;
    }

    function getOneGenerosController($id) {
        $res = getOneGenerosModel($id);
        return $res;
    }

    function addGeneroController($id, $nome, $descricao) {
        $genero["Nome"] = $nome;
        $genero["Descrição"] = $descricao;
        $res = addGenerosModel($id, $genero);
        return $res;
    }

    function updateGeneroController($id, $nome, $descricao) {
        $genero["Nome"] = $nome;
        $genero["Descrição"] = $descricao;
        $res = updateGenerosModel($id, $genero);
        return $res;
    }

    function deleteGeneroController($id) {
        $res = deleteGenerosModel($id);
        return $res;
    }

    // var_dump(addGeneroController(13, "Teste","Filmes de comédia romântica"));
    // var_dump(updateGeneroController(13, "Comédia Romântica","Filmes de comédia romântica"));
    // var_dump(deleteGeneroController(13));
    
    

?>