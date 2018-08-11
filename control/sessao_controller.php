<?php
     include_once("../model/sessao.php");

     function getAllSessaoController() {
         $res = getAllSessaoModel();
         return $res;
     }

     function getSessaoController() {
         $res = getSessaoModel();
         return $res;
     }
 
     function getOneSessaoController($horario, $id) {
         $res = getOneSessaoModel($horario, $id);
         return $res;
     }
 
     function addSessaoController($sessao) {
         $res = addSessaoModel($sessao);
         return $res;
     }
 
     function updateSessaoController($horario, $id_cinema, $editar_sessao) {
         $res = updateSessaoModel($horario, $id_cinema, $editar_sessao);
         return $res;
     }
 
     function deleteSessaoController($horario, $id) {
         $res = deleteSessaoModel($horario, $id);
         return $res;
     }
     
    if(isset($_POST["sessao"])){
        $sessao = $_POST["sessao"];
        
        if(addSessaoController($sessao)){
            header("location: ../view/listar_sessao.php"); die('Erro ao tentar executar o comando');
        }
    }
     
    if(isset($_POST["editar_sessao"]) and isset($_POST["horario"]) and isset($_POST["id_cinema"])){
        $editar_sessao = $_POST["editar_sessao"];
        $horario = $_POST["horario"];
        $id_cinema = $_POST["id_cinema"];
        
        if(updateSessaoController($horario, $id_cinema, $editar_sessao)){
            header("location: ../view/listar_sessao.php"); die('Erro ao tentar executar o comando');
        }
    }
?>  