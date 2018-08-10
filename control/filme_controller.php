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

    function addFilmeController($titulo_original, $duracao, $pais_origem, $diretor, $titulo_pt) {
        $filme["Título_Original"] = $titulo_original;
        $filme["Duração"] = $duracao;
        $filme["País_Origem"] = $pais_origem;
        $filme["Diretor"] = $diretor;
        $filme["Título_Português"] = $titulo_pt;
        $res = addFilmeModel($filme);
        return $res;
    }

    
    function updateFilmeController($id, $titulo_original, $duracao, $pais_origem, $diretor, $titulo_pt) {
        $filme["Título_Original"] = $titulo_original;
        $filme["Duração"] = $duracao;
        $filme["País_Origem"] = $pais_origem;
        $filme["Diretor"] = $diretor;
        $filme["Título_Português"] = $titulo_pt;
        $res = updateFilmeModel($id, $filme);
        return $res;
    }

    function deleteFilmeController($id) {
        $res = deleteFilmeModel($id);
        return $res;
    }

    // var_dump(getAllFilmesController());

/*     $recebe = getAllFilmesController();
    $recebe = $recebe[0];
    echo "Título_Original: ".$recebe["Título_Original"]."<br>";
    echo "Duração: ".$recebe["Duração"]."<br>";
    echo "País_Origem: ".$recebe["País_Origem"]."<br>"; */

    // var_dump(addFilmeController("Ghost in the shell", 120, "EUA", "Maria Isabel", "A vigilante do amanhã"));
    // var_dump(updateFilmeController(2,"Ghost in the shell", 120, "EUA", "Isabel Santiago", "A vigilante do amanhã"));
    // var_dump(deleteFilmeController(2));

?>