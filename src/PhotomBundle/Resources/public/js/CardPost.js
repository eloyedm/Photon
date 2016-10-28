define(['jquery', 'Backbone', 'commentView'],  function($, backbone, commentView) {
  $(document).ready(function(){
    $(document).keypress(function(e) {
        if(e.which == 13) {
          var commentSelected = $("#comment-input:focus");
          var idPub = $(commentSelected).parent().parent().siblings(".idPub").text();
          if($(commentSelected).val() != "" && idPub != null){
            $.ajax({
              method: "POST",
              url: "/content/addComment",
              data: {
                "idPub": idPub,
                "comment": $(commentSelected).val()
              },
              success: function(data){
                console.log(data);
                var comentario = new commentView({
                  "autor": data.usuario,
                  "comentario": data.com
                });
                comentario.$el.css("display", "none");
                $(commentSelected).parent().siblings(".comentarios").find("ul.list-group-comments").append(comentario.$el);
                $(commentSelected).val("");
                comentario.$el.fadeIn();
              }
            });
          }
        }
      });
    });
});
