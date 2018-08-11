<?php

    require_once("../control/cinema_controller.php");

    if(isset($_GET["Id_Cinema"])){
        $id = $_GET["Id_Cinema"];
        deleteCinemaController($id);
        header("location: listar_cinema.php"); die('Erro ao tentar executar o comando');
    }

?>