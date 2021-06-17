

function showTasks () {
  $.ajax({
    url: './dist/handlers/showTasksHandler.php',
    data: {
        showTasks : true,
    },
    type: "POST",
    success: function (data) {
      $(".section .card").remove();
      $(".section").append(data);
    }
  })
};

$(document).ready( function () {
  showTasks();
})

window.showTasks = showTasks;