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
 
     function addAtorController($nome, $nacionalidade, $idade) {
         $ator["Nome"] = $nome;
         $ator["Nacionalidade"] = $nacionalidade;
         $ator["Idade"] = $idade;
         $res = addAtorModel($ator);
         return $res;
     }
 
     function updateAtorController($id, $nome, $nacionalidade, $idade) {
        $ator["Nome"] = $nome;
        $ator["Nacionalidade"] = $nacionalidade;
        $ator["Idade"] = $idade;
         $res = updateAtorModel($id, $ator);
         return $res;
     }
 
     function deleteAtorController($id) {
         $res = deleteAtorModel($id);
         return $res;
     }
?>