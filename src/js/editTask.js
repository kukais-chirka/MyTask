//Functions that has a part of editing task


//change status of task done or not done
function isDone(taskID, thisCheckB) {
  var value;
  if ($(thisCheckB).is(':checked') == true ) // This should be approached another way...
      value = 1;
  else 
      value = 0;    
  $.ajax({
    url: './dist/handlers/isDoneHandler.php',
    data: {
      isDone: value,
      taskID: taskID,
    },
    type:'POST',
    success:function(data) {
      console.log(data);
    }
  })
}



function editTask(ID) {
  $("#edit_task_box").addClass("grow");
  $.ajax({
    url: './dist/views/editTask.php',
    data: {
      taskID: ID,
    },
    type:'POST',
    success:function(data) {
      $("#edit_task_box").addClass("grow")
      $(".section").after(data);
    }
  })
}

function closeModal(elementID){
  $("#" + elementID).remove();
}

function saveEdit(edit_task_box, taskID) {
  if ($("#titleEdit").val() != '' )
    valid = true;
  if (valid == true) {
    $.ajax({
      url: './dist/handlers/saveEditHandler.php',
      data: {
        taskID: taskID,
        titleVal : $("#titleEdit").val(),
        descrVal : ( $("#descriptionEdit").val() == '') ? 0 : $("#descriptionEdit").val() ,
        urgentVal: $("#isUrgentEdit:checked").val(),
        motivAdd : ( $("#motivationEdit").val() == '') ? 0 : $("#motivationEdit").val() ,
      },
      type:'POST',
      success:function(data) {
        alert("Task has been successfully updated");
        showTasks();
        closeModal(edit_task_box);
      }
    })
  } else {
    $(".error").addClass("grow");
  }
}


function deleteTask(edit_task_box, taskID) {
  $.ajax({
    url: './dist/handlers/deleteTaskHandler.php',
    data: {
      taskID: taskID,
    },
    type:'POST',
    success:function(data) {
      console.log(data);
      alert("Task has been succesfully deleted");
      showTasks();
      closeModal(edit_task_box);
    }
  })

}



window.editTask = editTask;
window.closeModal = closeModal;
window.saveEdit = saveEdit;
window.deleteTask = deleteTask;
window.isDone = isDone;
