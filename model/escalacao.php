<?php

    // Estabelecendo conexão com o banco através do arquivo connection.php
    include_once('connection.php');

        function getAllEscalacaoModel(){
        global $connection;
        $listar_todos = [];
        $res = $connection->query("SELECT * FROM escalação;");
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

    function getOneEscalacaoModel($id_ator, $id_filme) {
        global $connection;
        $res = $connection->query("SELECT * FROM escalação WHERE Id_Ator='$id_ator' AND Id_Filme='$id_filme'");
        if($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            return $row;
        }
        else{
            die('Error: ' . $connection->error);
        }

    }

    function addEscalacaoModel($escalacao) {
        global $connection;
        $tipoAtuacao = $escalacao["'Tipo_Atuação'"];
        $id_ator = $escalacao["'Id_Ator'"];
        $id_filme = $escalacao["'Id_Filme'"];
        $res = $connection->query("INSERT INTO escalação(Tipo_Atuação, Id_Ator, Id_Filme) values('$tipoAtuacao','$id_ator','$id_filme')");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function updateEscalacaoModel($id_ator, $id_filme, $escalacao) {
        global $connection;
        $tipoAtuacao = $escalacao["'Tipo_Atuação'"];
        $id_ator = $escalacao["'Id_Ator'"];
        $id_filme = $escalacao["'Id_Filme'"];
        $res = $connection->query("UPDATE escalação SET Tipo_Atuação='$tipoAtuacao', Id_Ator='$id_ator', Id_Filme='$id_filme' WHERE  Id_Ator='$id_ator' AND Id_Filme='$id_filme'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function deleteEscalacaoModel($id) {
        global $connection;
        $res = $connection->query("DELETE FROM filme WHERE Id_Filme='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

?>