<?php
     include_once("../model/sessao.php");

     function getAllSessaoController() {
         $res = getAllSessaoModel();
         return $res;
     }
 
     function getOneSessaoController($id) {
         $res = getOneSessaoModel($id);
         return $res;
     }
 
     function addSessaoController($horario, $publico, $id_filme, $id_cinema) {
         $sessao["Horário"] = $horario;
         $sessao["Público_Lotação"] = $publico;
         $sessao["Id_Filme"] = $id_filme;
         $sessao["Id_Cinema"] = $id_cinema;
         $res = addSessaoModel($sessao);
         return $res;
     }
 
     function updateSessaoController($id, $horario, $publico, $id_filme, $id_cinema) {
        $sessao["Horário"] = $horario;
        $sessao["Público_Lotação"] = $publico;
        $sessao["Id_Filme"] = $id_filme;
        $sessao["Id_Cinema"] = $id_cinema;
         $res = updateSessaoModel($id, $sessao);
         return $res;
     }
 
     function deleteSessaoController($id) {
         $res = deleteSessaoModel($id);
         return $res;
     }
     var_dump(deleteSessaoController('2018-08-15 00:00:00'));
?>  