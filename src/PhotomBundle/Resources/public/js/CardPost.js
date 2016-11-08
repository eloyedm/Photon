define(['jquery', 'Backbone', 'commentView', 'reportModalView'],  function($, backbone, commentView, reportModalView) {
  $(document).ready(function(){
    $(document).keypress(function(e) {
        if(e.which == 13 && $("#comment-input:focus").length > 0) {
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
                $(commentSelected).parent().siblings(".comentarios").find("ul.list-group-comments").prepend(comentario.$el);
                hashtags(comentario.$el.find(".comment"));
                $(commentSelected).val("");
                comentario.$el.fadeIn();
              }
            });
          }
          else{
            alert("No puedes postear comentarios vacios");
          }
        }
    });

    $(".like-button").click(function(){
      var idPub = $(this).parent().parent().siblings(".idPub").text();
      var button = this
      if(idPub != null){
        $.ajax({
          method: "POST",
          url: "/content/like",
          data: {
            "idPub": idPub
          },
          success: function(data){
            $(button).find("i").css("color", "blue");
          }
        });
      }
    });

    $(".dislike-button").click(function(){
      var idPub = $(this).parent().parent().siblings(".idPub").text();
      var objReportModal = new reportModalView({
        'idPub': idPub
      });
      $("body").append(objReportModal.$el);
    });

    $(".comment").each(function(){
      hashtags(this);
    });
  });

  function hashtags(comment){
    var content = $(comment).text();
    var tag = content.split("#");
    var hashArr = []
    if(tag.length >= 2){
      for(var i = 0; i < tag.length; i++){
        var hash = tag[i].split(" ")[0];
        hashArr.push(hash);
      }
    }
    var newContent = "";
    for(var j = 0; j < hashArr.length; j++){
      content = content.replace("#"+hashArr[j], '<span class="hashtag">#' + hashArr[j] + '</span>' );

    }
    $(comment).html(content);
  }
});
