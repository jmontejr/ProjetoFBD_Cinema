<?php
     include_once("../model/ator.php");

     function getAllAtorController() {
         $res = getAllAtorModel();
         return $res;
     }
 
     function getOneAtorController($id) {
         $res = getOneAtorModel($id);
         return $res;
     }
 
     function addAtorController($ator) {
         $res = addAtorModel($ator);
         return $res;
     }
 
     function updateAtorController($id, $editar_ator) {
         $res = updateAtorModel($id, $editar_ator);
         return $res;
     }
 
     function deleteAtorController($id) {
         $res = deleteAtorModel($id);
         return $res;
     }

    if(isset($_POST["ator"])){
        $ator = $_POST["ator"];
        
        if(addAtorController($ator)){
            header("location: ../view/listar_ator.php"); die('Erro ao tentar executar o comando');
        }
    }

    if(isset($_POST["editar_ator"]) and isset($_POST["Id_Ator"])){
        $editar_ator = $_POST["editar_ator"];
        $id = $_POST["Id_Ator"];

        if(updateAtorController($id, $editar_ator)){
            header("location: ../view/listar_ator.php"); die('Erro ao tentar executar o comando');
        }
    }
?>