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

  window.setInterval(function(){
    $.ajax({
      method: "GET",
      url: "/get/notifications",
      success: function(){
        var notification = new notificationView();
      }
    });


  }, 3000)
});
});
