<?php

class Conectar{
    public function con(){

        $username = "aplicación";
        $password = "22325mysql.";
        $host     = "localhost";
        $basededatos = "db_mi_primera";
        
        try{
            $conexion = new PDO("mysql:host=$host;dbname=$basededatos",$username,
            $password);
            $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            echo"Conexion realizada satisfactoriamente";

             return $conexion;

        }catch(Exception $e)
        { 
            echo $e->getMessage();

        }
    }
}

?>