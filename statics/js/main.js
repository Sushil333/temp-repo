var taskId = null;

$("#exampleModal").on("show.bs.modal", function (event) {
  var button = $(event.relatedTarget); // Button that triggered the modal
  var recipient = button.data("whatever"); // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this);
  modal.find(".modal-title").text(recipient);
  // modal.find('.modal-body input').val(recipient)
  taskId = button.data("id");
  if (taskId !== null || taskId != "") {
    $("#id").val(taskId);
    $("#title").val(button.data("title"));
    $("#status").val(button.data("status"));
    $("#priority").val(button.data("priority"));
    $("#description").val(button.data("description"));
  }
});
