var jqxhr = $.get("http://example.com/data", function() {
  alert( "success" );
})
  .done(function() {
    alert( "second success" );
  })
  .fail(function() {
    alert( "error" );
  })
  .always(function() {
    alert( "finished" );
  });