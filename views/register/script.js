jQuery(document).ready(function() {
  
  $('input').on('keyup', function() {
    var data = {nome : $(this).val()}
    var url = "/esnforum/register/checkName";
    $.post(url, data, function(e) {
      $('#message').replaceWith( '<span id="message">' + 
              e.name + '</span>');
    }, 'json');
  });

  $(document).on('click', '.del', function() {
    var id = $(this).attr("href");
    delItem = $(this);
    $.get("/esnforum/usermanager/delete/" + id, function() {
      delItem.parent().remove();
    });
    return false;
  });

  $('#adduser').submit(function() {
    var url = $(this).attr('action');
    var data = $(this).serialize();
    $.post(url, data, function(e) {
      $('#listInserts').append('<div>' + e.name
              + ' <a class="del" href="' + e.id
              + '">delete' + '</a>' + '</div>');
    }, 'json');
    $('#adduser')[0].reset();
    return false;
  });
});