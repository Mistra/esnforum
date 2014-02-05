jQuery(document).ready(function() {

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