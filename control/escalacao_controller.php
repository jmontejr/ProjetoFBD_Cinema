<?php

    include_once("../model/escalacao.php");

    function getEscalacaoByFilmeController($id_filme) {
        $res = getEscalacaoFilmeModel($id_filme);
        return $res;
    }

    function getOneEscalacaoController($id_ator, $id_filme) {
        $res = getOneEscalacaoModel($id_ator, $id_filme);
        return $res;
    }

    function addEscalacaoController($escalacao) {
        $res = addEscalacaoModel($escalacao);
        return $res;
    }

    function updateEscalacaoController($id_ator, $id_filme, $escalacao) {
        $res = updateEscalacaoModel($id_ator, $id_filme, $escalacao);
        return $res;
    }

    function deleteEscalacaoController($id_ator, $id_filme) {
        $res = deleteEscalacaoModel($id_ator, $id_filme);
        return $res;
    }

    if(isset($_POST["elenco"]) and isset($_POST["Id_Filme"])){
        $elenco = $_POST["elenco"];
        $elenco["Id_Filme"] = (int)$_POST["Id_Filme"];
        if(addEscalacaoController($elenco)){
            header("location: ../view/detalhe_filme.php"); die('Erro ao tentar executar o comando');
        }
    }

?>