<?php

    // Estabelecendo conexão com o banco através do arquivo connection.php
    include_once('connection.php');

    function getAllSessaoModel(){
        global $connection;
        $listar_todos = [];
        $res = $connection->query("SELECT * FROM sessão_cartaz;");
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

   
    function getOneSessaoModel($id) {
        global $connection;
        $res = $connection->query("SELECT * FROM sessão_cartaz WHERE Horário='$id'");
        if($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            return $row;
        }
        else{
            die('Error: ' . $connection->error);
        }

    }

    function addSessaoModel($sessao) {
        global $connection;
        $horario = $sessao["Horário"];
        $publico = $sessao["Público_Lotação"];
        $id_filme = $sessao["Id_Filme"];
        $id_cinema = $sessao["Id_Cinema"];
        $res = $connection->query("INSERT INTO sessão_cartaz(Horário, Público_Lotação, Id_filme, Id_cinema) values('$horario','$publico','$id_filme','$id_cinema')");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function updateSessaoModel($id, $sessao) {
        global $connection;
        $horario = $sessao["Horário"];
        $publico = $sessao["Público_Lotação"];
        $id_filme = $sessao["Id_Filme"];
        $id_cinema = $sessao["Id_Cinema"];
        $res = $connection->query("UPDATE sessão_cartaz SET Horário='$horario', Público_Lotação='$publico', Id_Filme='$id_filme', Id_Cinema='$id_cinema' WHERE Horário='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function deleteSessaoModel($id) {
        global $connection;
        $res = $connection->query("DELETE FROM sessão_cartaz WHERE Horário='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }
    

?>