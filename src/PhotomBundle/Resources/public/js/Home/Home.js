define(['jquery', 'Backbone', 'cardPost', 'menu'],  function($, backbone, cardPost, menu) {
  $(document).ready(function(){
    $("#notificationLink").click(function()
                               {
      $("#notificationContainer").fadeToggle(300);
      $("#notification_count").fadeOut("slow");
      return false;
  });
  $(".borrarContenido").click(function(){
    var idPub = $(this).parent().parent().find(".idPub").text();
    var card = $(this).parent().parent().parent();
    console.log(idPub);
    $.ajax({
      type: "GET",
      url: "/delete/content",
      data: {
        "idPub": idPub
      },
      success: function(){
        console.log(card);
      card.remove();
      }
    });
  });

  $(".editarContenido").click(function(){
    var idPub = $(this).parent().parent().find(".idPub").text();
    console.log($(this).siblings("descripcion-video"));
    var form = $("<form />", {
      enctype: "multipart/form-data",
      method: "post",
      action: "/content/edit/publication"
    });

    var newImage = $("<input />", {
      type: "file",
      name: "newImage",
      class: "newImage",
      required: "true",
      css: {
        "float": "right"
      }
    });
    var newText = $("<input />", {
      type: "text",
      name: "newText",
      class: "newText",
      value: $(this).siblings("p").text()
    });

    var idPubNew = $("<input />", {
      type: "hidden",
      name: "idPub",
      value: idPub
    });

    var butmitBut = $("<button />", {
      type:"submit",
      value: "Actualizar",
      text: "actualizar"
    })

    form.append(newText, newImage, butmitBut, idPubNew);
    $(this).parent().parent().parent().prepend(form);
  });

  $(document).click(function(event)
                    {
                      console.log(event.target);
      $("#notificationContainer").hide();
  });
  $("#notificationContainer").click(function()
                                    {
      return false;
  });
    $("#camera-button").click(function(){
      $(".photoSubmit").click();
    });

    $("#video-button").click(function(){
      $(".videoSubmit").click();
    });

    $(".photoSubmit").change(function(e){
      $('#photoPreview').css({'visibility':'visible'});
      var input = e.target
      if(input != null ){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload = function(e){
            $(".imagePreview").attr("src", e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    });

    $(".followSearchUser").click(function(e){
      var that = this
      var nombreUsuario = $(that).siblings(".usernameCanonical").attr("data");
      $.ajax({
        type  : "GET",
        url   : "/users/follow",
        data  : {
          "seguirA" : nombreUsuario
        },
        datatype: "json",
        success: function(data){
          console.log(data);
          if(data.status == 0){
            console.log(data);
            $(that).removeClass("followUser").addClass("followedUser");
            var icono = $(that).find("i");
            icono.removeClass("fa-plus-circle").addClass("fa-check-circle");
            var texto = $(that).find("span");
            texto.text("Siguiendo");
          }
          else if (data.status == 1) {
            console.log(data);
            $(that).removeClass("followedUser").addClass("followUser");
            var icono = $(that).find("i");
            icono.removeClass("fa-check-circle").addClass("fa-plus-circle");
            var texto = $(that).find("span");
            texto.text("Seguir");
          }
        }
      });
    });

  });
});
