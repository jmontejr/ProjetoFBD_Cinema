<?php

    // Estabelecendo conexão com o banco através do arquivo connection.php
    include_once('connection.php');

        function getAllFilmesModel(){
        global $connection;
        $listar_todos = [];
        $res = $connection->query("SELECT * FROM filme;");
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

    function getOneFilmeModel($id) {
        global $connection;
        $res = $connection->query("SELECT * FROM filme WHERE Id_Filme='$id'");
        if($res->num_rows > 0) {
            $row = $res->fetch_assoc();
            return $row;
        }
        else{
            die('Error: ' . $connection->error);
        }

    }

    function addFilmeModel($filme) {
        global $connection;
        $titulo_original = $filme["Título_Original"];
        $duracao = $filme["Duração"];
        $pais_origem = $filme["País_Origem"];
        $diretor = $filme["Diretor"];
        $titulo_pt = $filme["Título_Português"];
        $res = $connection->query("INSERT INTO filme(Título_Original, Duração, País_Origem, Diretor, Título_Português) values('$titulo_original','$duracao','$pais_origem','$diretor','$titulo_pt')");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function updateFilmeModel($id, $filme) {
        global $connection;
        $titulo_original = $filme["Título_Original"];
        $duracao = $filme["Duração"];
        $pais_origem = $filme["País_Origem"];
        $diretor = $filme["Diretor"];
        $titulo_pt = $filme["Título_Português"];
        $res = $connection->query("UPDATE filme SET Título_Original='$titulo_original', Duração='$duracao', País_Origem='$pais_origem', Diretor='$diretor', Título_Português='$titulo_pt' WHERE Id_Filme='$id'");
        if ($res){
            return $res;
        }
        else{
            die('Error: ' . $connection->error);
        }
    }

    function deleteFilmeModel($id) {
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