define(['jquery', 'updateUserInfo', 'menu'],  function($, updateUserInfo, menu) {
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

    $(document).click(function(event)
                      {
                        console.log(event.target);
        $("#notificationContainer").hide();
    });
    $("#notificationContainer").click(function()
                                      {
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

    $(".tablinks").click(function(event){
      changetab(event, $(this).attr("data"));
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
