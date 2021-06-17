<div id="add_task_box" class="model_bg">

  <div class="card mx-auto my-auto needs-validation" novalidate>
    <div class="card-header d-flex justify-content-between">
      <h4>New task</h4>
      <i class="fas fa-times" id="close_add_task_btn" ></i>
    </div>
    <div class="card-body d-flex flex-column">
      <h5 class="card-title">Please fill the following fields:</h5>
      <div class="mb-3">
        <label for="titleAdd" class="form-label">*Task Title</label>
        <input type="text" onKeyUp="checkValidation(this)" class="form-control" id="titleAdd" required maxlength="100">
        <div class="error">
          Please input the name of the task
        </div>
      </div>
      <div class="mb-3">
        <label for="descriptionAdd" class="form-label">Task Description</label>
        <textarea class="form-control" id="descriptionAdd" rows="3" maxlength="300"></textarea>
      </div>
      <div class="mb-3">
        <input class="form-check-input" type="checkbox" value="1" id="isUrgentAdd" >
        <label class="form-check-label" for="isUrgentAdd">
          Is this an <b>urgent</b> task?
        </label>
      </div>
      <div class="mb-3">
        <label for="motivationAdd"  class="form-label"  >Motivational Text</label>
        <input type="text" class="form-control" id="motivationAdd"  maxlength="100" aria-describedby="motivationHelp">
        <div id="motivationHelp" class="form-text">This text will show, if this task isn't done in 2 days</div>
      </div>
      <div class="ms-auto">
        <input class="btn btn-primary" value="Add task" id="add_task_btn" type="button">
      </div>
    </div>
  </form>
</div>
</div>

</div>