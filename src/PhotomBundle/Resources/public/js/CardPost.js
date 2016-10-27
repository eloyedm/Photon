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
            }
          });
        }
      }
  });
});
