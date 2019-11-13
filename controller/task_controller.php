<?php
require_once("model/task.php");

$tarea= new tareas_model();
$matrizTarea=$tarea->get_tareas();


require_once("view/task_view.php");


?>