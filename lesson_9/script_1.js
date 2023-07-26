$(document).ready(function() {
  $("#countryForm").submit(function(e) {
    e.preventDefault();
    $.ajax({
      type: "POST",
      url: 'ajax.php',
      data: $(this).serialize(),
      success: function(response)
      {
        alert(response);
      }
    });
  });
});