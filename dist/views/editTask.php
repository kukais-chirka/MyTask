
<?php 
include_once (__DIR__ . "/../controller.php");

if (isset($_POST['taskID'])) {
  $result = new TasksController();
  $result = $result->invokeGetTask($_POST['taskID']);

  while($row = $result->fetch_assoc()) {
    $taskID = $row['Task_ID'];
    $title = $row['Title'];
    $description = $row['Description'];
    $motivation = $row['MotivationText'];
    $isUrgent = $row['isUrgent'];
    $isDone = $row['isDone'];
  }

}

?>

<div id="edit_task_box" class="model_bg grow ">

  <div class="card mx-auto my-auto" novalidate>
    <div class="card-header d-flex justify-content-between">
      <h4>Edit task</h4>
      <i class="fas fa-times" onclick="closeModal('edit_task_box')" id="close_edit_task_btn" ></i>
    </div>
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">Please fill the following fields:</h5>
      <div class="mb-3">
        <label for="titleAdd" class="form-label">*Task Title</label>
        <input type="text" onKeyUp="checkValidation(this)" value="<?php echo $title ?>" class="form-control" id="titleEdit" required maxlength="100">
        <div class="error">
          Please input the name of the task
        </div>
      </div>
      <div class="mb-3">
        <label for="descriptionAdd" class="form-label">Task Description</label>
        <textarea class="form-control" id="descriptionEdit" rows="3" maxlength="300" ><?php echo $description ?></textarea>
      </div>
      <div class="mb-3">
        <?php if ($isUrgent != 0) { ?>
          <input class="form-check-input" type="checkbox" checked value="1" id="isUrgentEdit" >
        <?php } else { ?> 
          <input class="form-check-input" type="checkbox"  value="1" id="isUrgentEdit" >
        <?php }  ?>
        <label class="form-check-label" for="isUrgentAdd">
          Is this an <b>urgent</b> task?
        </label>
      </div>
      <div class="mb-3">
        <label for="motivationAdd"  class="form-label"  >Motivational Text</label>
        <input type="text" class="form-control" id="motivationEdit" value="<?php echo $motivation ?>"  maxlength="100" aria-describedby="motivationHelp">
        <div id="motivationHelp" class="form-text">This text will show, if this task isn't done in 2 days</div>
      </div>
      <div class="ms-auto">
        <input class="btn btn-danger"value="Delete" onclick="deleteTask('edit_task_box', <?php echo $taskID ?> )" id="delete_task" type="button">
        <input class="btn btn-success" value="Save" onclick="saveEdit('edit_task_box', <?php echo $taskID ?> )" id="save_edit" type="button">
      </div>
    </div>
  </form>
</div>
</div>

</div>