<?php

    // Estabelecendo conexão com o banco através do arquivo connection.php
    include_once('connection.php');

    function getAllGenerosModel(){
        global $connection;
        $listar_todos = [];
        $res = $connection->query("SELECT * FROM gênero;");
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

    function getOneGenerosModel($id) {
        global $connection;
        $res = $connection->query("SELECT * FROM gênero WHERE Id_Gênero='$id'");
        if($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            return $row;
        }
        else{
            die('Error: ' . $connection->error);
        }

    }

    function addGenerosModel($genero) {
        global $connection;
        $nome = $genero["Nome"];
        $descricao = $genero["Descrição"];
        $res = $connection->query("INSERT INTO gênero(Nome, Descrição) values('$nome','$descricao')");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function updateGenerosModel($id, $genero) {
        global $connection;
        $nome = $genero["Nome"];
        $descricao = $genero["Descrição"];
        $res = $connection->query("UPDATE gênero SET Nome='$nome', Descrição='$descricao' WHERE Id_Gênero='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function deleteGenerosModel($id) {
        global $connection;
        $res = $connection->query("DELETE FROM gênero WHERE Id_Gênero='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

?>