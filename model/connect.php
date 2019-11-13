<?php

class  conectar{

    public static function conexion(){

        try{
            $conexion= new PDO('mysql:host=localhost; dbname=tareas', 'root', '')
            $conexion->setAttribute(PDO:: ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion-> exec("SET CHARARTER SET UTFS");
        }catch(Exception $e){
                die("Error". $e->getMessage());
                echo "Line of error" . $e->getLine();
        }
        return $conexion;
    }
} 




?>