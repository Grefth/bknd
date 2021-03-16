<?php
    include "config.php";
    
    function conectar(){
        try {
            $conn = new PDO("mysql:host=localhost;dbname=pvnews_db","root","");
            return $conn;
        } 
        catch (PDOException $e) {
        echo $e->getMessage();
        }
    }

    function consultar($conn){

        try {
            $respuesta = $conn->prepare("select * from anuncios");
            $respuesta->execute();
            $anuncios = $respuesta->fetchAll(PDO::FETCH_ASSOC);            
            return $anuncios;    
        } catch (Exception $e) {
            echo $e;
        }
        
    }

?>