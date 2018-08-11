<?php

    require_once("../control/ator_controller.php");

    if(isset($_GET["Id_Ator"])){
        $id = $_GET["Id_Ator"];
        deleteAtorController($id);
        header("location: listar_ator.php"); die('Erro ao tentar executar o comando');
    }

?>