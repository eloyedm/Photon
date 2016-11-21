define(['jquery', 'slick'],  function($, slick) {
  $(document).ready(function() {
    $("#preguntasExtras").slick({
      arrows: true,
      infinite: false,
      adaptativeHeight: true
    });

    $(".checkPregunta").change(function(e){
      var texto = $(this).parent().find("input[type='text']");
      if(this.checked){
        texto.removeAttr("readonly").css("background-color","white");
      }
      else{
        texto.attr("readonly", "true").css("background-color","rgba(128,128,128,0.5)");
      }
    });
  });
});
