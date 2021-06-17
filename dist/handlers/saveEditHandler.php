<?php
include_once (__DIR__ . "/../controller.php");
include_once (__DIR__ . "/../model.php");
if (isset($_POST['taskID'])) {

  $result = new TasksController();
  $db_handle = new Model();

  $titleVal  = $db_handle->conn->real_escape_string($_POST["titleVal"]);
  $descrVal  = $db_handle->conn->real_escape_string($_POST["descrVal"]);
  $motivAdd  = $db_handle->conn->real_escape_string($_POST["motivAdd"]);
  $urgentVal = $db_handle->conn->real_escape_string($_POST["urgentVal"]);
  $taskID    = $db_handle->conn->real_escape_string($_POST["taskID"]);

  $values = array( $titleVal, $descrVal, $motivAdd, $urgentVal, $taskID, );
  
  $result = $result->invokeSaveEditedTask($values);


}


?>