define(['jquery', 'notificationView'],  function($, notificationView){
 $(document).ready(function(){
  $("#style-search").keyup(function(e){
    var term = e.target.value;
    $.ajax({
      method: "GET",
      url: "/livesearch",
      data: {
        "term": term
      },
      success: function(data){
        $("#resultsContainer").empty();
        $.each(data.resultados, function(){
          var result = $("<li />", {
            class:"result"
          });
          var resultLink = $("<a />", {
            href: "/perfil/"+this.username_canonical,
            class: "resultLink"
          });

          var resultName = $("<div />", {
            class: "resultName",
            text: this.nombreUsuario
          });

          resultLink.append(resultName);
          result.append(resultLink);
          $("#resultsContainer").append(result);
        });
      }
    });
  });

  var chequeado = 0
  window.setInterval(function(){
    $.ajax({
      method: "GET",
      url: "/get/notifications",
      datatype: "json",
      success: function(data){
        var notification = new notificationView({
          "autor": data.user,
          "comentario": data.comentarioNotificacion,
          'gusta': data.gustaNotificacion,
          'id': data.id,
          'idContenido': data.idContenidoNotificacion
        });
        if(chequeado == 0){chequeado=1;}
      },
      error: function(){
        if(chequeado == 2){
          $(".notificationCard").fadeOut("slow",function(){
            $(".notificationCard").remove();
          });

        }
        if(chequeado == 1){chequeado=2;}
      }

    });
  }, 5000)


});
});
