$('[type="submit"]').click(function() {
  $.post( "submit.php", { 
    email: $('[name="email"]').val(),
    nickname: $('[name="nickname"]').val(),
    sutnickname: $('[name="sutnickname"]').val(),
    pword: $('[name="pword"]').val(),
    pword1: $('[name="pword1"]').val()
  }, 
  function( data ) { 
    $( ".result" ).html(data);
  }
  
  );
});