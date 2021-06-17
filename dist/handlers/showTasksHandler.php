<?php 
  include_once (__DIR__ . "/../controller.php");
  include_once (__DIR__ . "/../model.php");
  if(isset($_POST['showTasks'])) {
    $tasks = new TasksController(); // Connection with data base
    echo $tasks->invokeTasks();
  }
?>