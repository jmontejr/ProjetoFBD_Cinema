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

    function addCinemasController($nome_Fantasia, $capacidade, $endereco) {
        $cinema["Nome_Fantasia"] = $nome_Fantasia;
        $cinema["Capacidade"] = $capacidade;
		$cinema["Endereço"]= $endereco;
        $res = addCinemasModel($cinema);
        return $res;
    }

    function updateCinemasController($id, $nome_Fantasia, $capacidade, $endereco) {
        $cinema["Nome_Fantasia"] = $nome_Fantasia;
        $cinema["Capacidade"] = $capacidade;
		$cinema["Endereço"]= $endereco;
        $res = updateCinemasModel($id, $cinema);
        return $res;
    }

    function deleteCinemasController($id) {
        $res = deleteCinemasModel($id);
        return $res;
    }
?>