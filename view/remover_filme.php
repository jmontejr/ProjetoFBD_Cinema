<?php

    require_once("../control/filme_controller.php");

    if(isset($_GET["Id_Filme"])){
        $id = $_GET["Id_Filme"];
        deleteFilmeController($id);
        header("location: listar_filme.php"); die('Erro ao tentar executar o comando');
    }

?>