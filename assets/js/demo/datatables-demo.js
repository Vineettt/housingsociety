// Call the dataTables jQuery plugin
$(document).ready(function() {
  $('#users').DataTable();
  $('#billing').DataTable({
    "order": [[ 0, "desc" ]]
  });
  $('#dailynotifications').DataTable({
      "order": [[ 0, "desc" ]]
    });
  $('#posts').DataTable({
    "order": [[ 0, "desc" ]]
  });
  $('#events').DataTable({
    "order": [[ 0, "desc" ]]
  });
});
