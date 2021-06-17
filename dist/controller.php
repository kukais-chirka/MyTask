<?php 
include_once (__DIR__ . "./model.php");

// File for how to show given data from Model

class Controller {
  public $model;
}

class TasksController extends Controller {
  function __construct() {
    $this->model = new TasksModel();
  }

  // Show all tasks based on Model answer
  function invokeTasks() {  //P.s. this function should me remaked..it's the wrong way of doing this. I think..
    $result = $this->model->getAllTasks();

    while ($row = $result->fetch_assoc()) {

      $isDone          = $row['isDone'];
      $Title          = $row['Title'];
      $createdDate    = $row['createdDate'];
      $description    = $row['Description'];
      $MotivationText = $row['MotivationText'];
      $isUrgent       = $row['isUrgent'];
      $taskID         = $row['Task_ID'];

      // Check if description not null
      if ($isDone != 0 ) {
        $isDone = '
        <input class="form-check-input" type="checkbox"  onchange="isDone('. $taskID .', this)" checked value="1" id="flexCheckDefault">';
      } else {
        $isDone = '
        <input class="form-check-input" type="checkbox"  onchange="isDone('. $taskID .', this)" value="1" id="flexCheckDefault">';
      }


      // Check if description not null
      if ($description != '0' ) {
        $description = '
        <h5 class="card-title">Description: </h5> <p class="card-text">'.$description.'</p>';
      } else {
        $description = null;
      }

      // Check if motivationText not null
      if( $MotivationText != '0' ) {
        $MotivationText =' 
        <div class="motivation flex-wrap motivation-color flex-fill d-flex ">
          <h6 class="lh-1 mb-0 pe-2">For Motivation: </h6> <p class="lh-1 mb-0">'.$MotivationText.'</p>
        </div>';
      } else {
        $MotivationText = null;
      }
      // Check if urgent not null
     if ($isUrgent != 0) {
          $isUrgent ='
          <div class="alert alert-danger justify-self-end mb-0" role="alert"> Urgent</div>';
      } else {
        $isUrgent = null;
      }


      // Main 
      echo '    <div class="card mb-3">
      <div class="card-header flex-wrap d-flex align-items-center justify-content-between">
          <div class="d-flex justify-content-center">
            '.$isDone.'
            <h5 class="ms-2">'.$Title.'</h5>
          </div>
          <div class="d-flex align-items-center"> 
            '.$isUrgent.'
            <small class="text-muted ms-2">'.$createdDate.'</small>
          </div>
      </div>
      
      <div class="card-body"> 
        '.$description.'
        <div class="d-flex align-items-center flex-wrap">
        '.$MotivationText.'
        <div onclick="editTask('. $taskID .')" class="ms-auto d-flex align-items-center edit-task">
             <i class="fas fa-edit me-2"></i> <h6 class="mb-0">Labot</h6>
        </div>
        </div>
      </div>
    </div>';
    }
  }

  // Function to add task to db trough Modal where is the sql statement
  function invokeAddTask($array) {
   echo $result = $this->model->addTask($array);
  }

  // function to invoke modal get all tasks
  function invokeGetTask($taskId) {
    return $result = $this->model->getTask($taskId);
  }

  // function to invoke modal save edited task
  function invokeSaveEditedTask($values) {
    return $result = $this->model->saveEditedTask($values);
  }

  // function to invoke modal to delete task
  function invokeDeleteTask($taskID) {
    return $result = $this->model->deleteTask($taskID);
  }

  // function to invoke modal to change status of done or undone
  function invokeChangeDone($values) {
    return $result = $this->model->changeDone($values);
  }
  
}





?>