<?php
include_once (__DIR__ . "/../controller.php");
include_once (__DIR__ . "/../model.php");
if (isset($_POST['taskID'])) {
  $result = new TasksController();
  return $result = $result->invokeDeleteTask($_POST['taskID']);
}


?>