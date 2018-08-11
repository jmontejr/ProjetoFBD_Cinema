<?php

    require_once("../control/escalacao_controller.php");

    if(isset($_GET["Id_Filme"]) and isset($_GET["Id_Ator"])){
        $id_filme = $_GET["Id_Filme"];
        $id_ator = $_GET["Id_Ator"];
        deleteEscalacaoController($id_ator, $id_filme);
        header("location: detalhe_filme.php"); die('Erro ao tentar executar o comando');
    }

?>