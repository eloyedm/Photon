define(['jquery', 'updateUserInfo', 'menu', 'cardPost'],  function($, updateUserInfo, menu, cardPost) {
$(document).ready(function() {
      $("#notificationLink").click(function()
                                 {
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
    });
    $("#camera-button").click(function(){
      $(".photoSubmit").click();
    });


      $("html").click(function(event){
          console.log(event.target);
          $("#notificationContainer").hide();
      });
      $("#notificationContainer").click(function(){
          return false;
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

    $(".follow").click(function(){
      var nombreUsuario = window.location.pathname;
      nombreUsuario = nombreUsuario.split("/");
      nombreUsuario = nombreUsuario[nombreUsuario.length -1];
      console.log(nombreUsuario);
      $.ajax({
        type  : "GET",
        url   : "/users/follow",
        data  : {
          "seguirA" : nombreUsuario
        },
        datatype: "json",
        success: function(data){
          if(data.status == 0){
            $(".follow").removeClass("follow").addClass("followed");
            var icono = $(".followed").find("i");
            icono.removeClass("fa-plus-circle").addClass("fa-check-circle");
          }
          else if (data.statu == 1) {
            $(".followed").removeClass("followed").addClass("follow");
            var icono = $(".follow").find("i");
            icono.removeClass("fa-check-circle").addClass("fa-plus-circle");
          }
        }
      });
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

    $(".tablinks").click(function(event){
      changetab(event, $(this).attr("data"));
    });

    $(".info-privacidad input").change(function(){
      var valor = 0;
      valor = this.checked == true ? 1: 0;
      $.ajax({
        method: "GET",
        url: "/user/set/privacidad",
        data: {
          "status": valor
        }
      });
    });
});
function changetab(evt, tabName) {
    if(tabName.localeCompare("followers") == 0)
    {
        document.getElementById('followers').style.display = "inline-block";
        document.getElementById('notification').style.display = "none";
        document.getElementById('profile').style.display = "none";
        document.getElementById('following').style.display = "none";
    }

    if(tabName.localeCompare("notification") == 0)
    {
        document.getElementById(tabName).style.display = "inline-block";
        document.getElementById('following').style.display = "none";
        document.getElementById('profile').style.display = "none";
        document.getElementById('followers').style.display = "none";
    }

    if(tabName.localeCompare("profile") == 0)
    {
        document.getElementById(tabName).style.display = "inline-block";
        document.getElementById('notification').style.display = "none";
        document.getElementById('following').style.display = "none";
        document.getElementById('followers').style.display = "none";
    }

    if(tabName.localeCompare("following") == 0)
    {
        document.getElementById(tabName).style.display = "inline-block";
        document.getElementById('notification').style.display = "none";
        document.getElementById('profile').style.display = "none";
        document.getElementById('followers').style.display = "none";
    }
}
});
