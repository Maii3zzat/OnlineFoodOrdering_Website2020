
$(document).ready(function() {

  $(".adminpanel li a").each(function() {
    if (this.href == window.location.href) {
      $(this).addClass("activated");
    }
  });

});
