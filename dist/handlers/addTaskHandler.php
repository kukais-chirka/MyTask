<?php 
include_once (__DIR__ . "/../controller.php");
include_once (__DIR__ . "/../model.php");
if(isset($_POST['titleVal'])) {

  $db_handle = new Model();

  $titleVal  = $db_handle->conn->real_escape_string($_POST["titleVal"]);
  $descrVal  = $db_handle->conn->real_escape_string($_POST["descrVal"]);
  $motivAdd  = $db_handle->conn->real_escape_string($_POST["motivAdd"]);
  $urgentVal = $db_handle->conn->real_escape_string($_POST["urgentVal"]);

  $values = array($titleVal, $descrVal, $motivAdd, $urgentVal );

  $controller = new TasksController();
  echo $controller-> invokeAddTask($values);

}


?>