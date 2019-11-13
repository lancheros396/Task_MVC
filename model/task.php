<?php
class tareas_model{

    private $db;
    private $tareas;

public function _construct(){
    require_once("model/connect.php");

    $this->db=conectar::conexion();
    $this->tareas=array();
}
 
public function get_tareas(){
    $consulta=$this->db->query("SELECT * FROM tarea");
    while ($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
        $this->tarea[]=$filas;
    } 
    
    return $this->tareas;
}
}
?>
