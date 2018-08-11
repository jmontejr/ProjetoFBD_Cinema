<?php

    // Estabelecendo conexão com o banco através do arquivo connection.php
    include_once('connection.php');

    function getAllCinemasModel(){
        global $connection;
        $listar_todos = [];
        $res = $connection->query("SELECT * FROM cinema;");
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

    function getOneCinemasModel($id) {
        global $connection;
        $res = $connection->query("SELECT * FROM cinema WHERE Id_Cinema='$id'");
        if($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            return $row;
        }
        else{
            die('Error: ' . $connection->error);
        }

    }

    function addCinemasModel($cinema) {
        global $connection;
        $nome_Fantasia = $cinema["Nome_Fantasia"];
        $capacidade = $cinema["Capacidade"];
		$endereço = $cinema["Endereço"];
        $res = $connection->query("INSERT INTO cinema(nome_Fantasia, capacidade, endereço) values('$nome_Fantasia','$capacidade','$endereço')");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function updateCinemasModel($id, $cinema) {
        global $connection;
        $nome_Fantasia = $cinema["Nome_Fantasia"];
        $capacidade = $cinema["Capacidade"];
		$endereço = $cinema["Endereço"];
        $res = $connection->query("UPDATE cinema SET Nome_Fantasia='$nome_Fantasia', Capacidade='$capacidade',Endereço='$endereço' WHERE Id_Cinema='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function deleteCinemasModel($id) {
        global $connection;
        $res = $connection->query("DELETE FROM cinema WHERE Id_Cinema='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

?>