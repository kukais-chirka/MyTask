<?php
include_once (__DIR__ . "/../controller.php");
include_once (__DIR__ . "/../model.php");
if (isset($_POST['taskID'])) {
  
  $db_handle = new Model();
  $isDone  = $db_handle->conn->real_escape_string($_POST["isDone"]);
  $taskID  = $db_handle->conn->real_escape_string($_POST["taskID"]);

  $values = array($isDone, $taskID);
  
  $result = new TasksController();
  return $result = $result->invokeChangeDone($values);
}


?>