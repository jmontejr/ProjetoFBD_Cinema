<?php

    // Estabelecendo conexão com o banco através do arquivo connection.php
    include_once('connection.php');

    function getAllAtorModel(){
        global $connection;
        $listar_todos = [];
        $res = $connection->query("SELECT * FROM ator;");
        if($res->num_rows > 0) {
            while($row = $res->fetch_assoc()){
                array_push($listar_todos, $row);
            }
            return $listar_todos;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

   
    function getOneAtorModel($id) {
        global $connection;
        $res = $connection->query("SELECT * FROM ator WHERE Id_Ator='$id'");
        if($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            return $row;
        }
        else{
            die('Error: ' . $connection->error);
        }

    }

    function addAtorModel($ator) {
        global $connection;
        $nome = $ator["Nome"];
        $nacionalidade = $ator["Nacionalidade"];
        $idade = $ator["Idade"];
        $res = $connection->query("INSERT INTO ator(Nome, Nacionalidade, Idade) values('$nome','$nacionalidade','$idade')");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }


    function updateAtorModel($id, $ator) {
        global $connection;
        $nome = $ator["Nome"];
        $nacionalidade = $ator["Nacionalidade"];
        $idade = $ator["Idade"];
        $res = $connection->query("UPDATE ator SET Nome='$nome', Nacionalidade='$nacionalidade', Idade='$idade' WHERE Id_Ator='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function deleteAtorModel($id) {
        global $connection;
        $res = $connection->query("DELETE FROM ator WHERE Id_Ator='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

?>