<?php

    require_once("../control/sessao_controller.php");

    if(isset($_GET["horario"]) and $_GET["Id_Cinema"]){
        $horario = $_GET["horario"];
        $id = $_GET["Id_Cinema"];
        deleteSessaoController($horario, $id);
        header("location: listar_sessao.php"); die('Erro ao tentar executar o comando');
    }

?>