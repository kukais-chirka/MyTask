

<!DOCTYPE html>
<html lang="en">



<body>
  <div class="container-fluid d-flex flex-column align-items-center justify-content-center">
      <header> 
        <div class="d-flex align-items-center justify-content-between flex-wrap mb-2 px-3">
          <h3>Krisjanis Nimanis <b> ToDo List</b> </h3>
          <div id="open_add_task_btn" class="addTask d-flex align-items-center">
            <i class="fas fa-plus-square fs-5 lh-sm"></i>
            <h5 class="mb-0 ps-2 lh-sm">Add Task</h5>
          </div>

        </div>
      </header>
      <div class="section">
      </div>
    <?php include("addTaskForm.php") ?>
  </div>
</body>

</html>