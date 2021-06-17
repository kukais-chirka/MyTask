window.valid = false;

function checkValidation (value) {
  if ($(value).val() == '') {
    valid = false;
    $(".error").addClass("grow");
  } else{
    valid = true;  
    $(".error").removeClass("grow");
  } 
  console.log(valid);
}

$(document).ready( function () {

  // Open add task box
  $("#open_add_task_btn").on('click', function () {
    $("#add_task_box").addClass("grow");
  })
  // close add task box
  $("#close_add_task_btn").on('click', function () {
    $("#add_task_box").removeClass("grow");
  })
  // $(".model_bg").on('click', function () {
  //   $(".model_bg").removeClass("grow");
  // })
  
  $("#add_task_btn").on('click', function () {
    if (valid == true) {
      $.ajax({
        url: './dist/handlers/addTaskHandler.php',
        data: {
            titleVal : $("#titleAdd").val(),
            descrVal : ( $("#descriptionAdd").val() == '') ? 0 : $("#descriptionAdd").val() ,
            urgentVal: $("#isUrgentAdd:checked").val(),
            motivAdd : ( $("#motivationAdd").val() == '') ? 0 : $("#motivationAdd").val() ,
        },
        type: "POST",
        success: function (data) {
          alert("Task added successfully!")
          showTasks();
          $("#titleAdd").val('');
          $("#descriptionAdd").val('')
          $("#isUrgentAdd").removeAttr("checked");
          $("#motivationAdd").val('');
          $(".model_bg").removeClass("grow");
          valid = false;
        }
      })
    } else {
      $(".error").addClass("grow");
    }
  })

})

window.checkValidation = checkValidation;