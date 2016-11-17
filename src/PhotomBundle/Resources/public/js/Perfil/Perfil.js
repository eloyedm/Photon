define(['jquery', 'updateUserInfo', 'menu'],  function($, updateUserInfo, menu) {
$(document).ready(function() {
      $("#notificationLink").click(function()
                                 {
        $("#notificationContainer").fadeToggle(300);
        $("#notification_count").fadeOut("slow");
        return false;
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

    $(".follow").click(function(){
      var nombreUsuario = window.location.pathname;
      nombreUsuario = nombreUsuario.split("/");
      nombreUsuario = nombreUsuario[nombreUsuario.length -1];
      console.log(nombreUsuario);
      $.ajax({
        method  : "GET",
        url   : "/users/follow",
        data  : {
          "seguirA" : nombreUsuario
        },
        datatype: "json",
        success: function(data){
          if(data.status == 1){
            $(".follow").removeClass("follow").addClass("followed");
            var icono = $(".followed").find("i");
            icono.removeClass("fa-plus-circle").addClass("fa-check-circle");
         }
        }
      });
    });

    $(".tablinks").click(function(event){
      changetab(event, $(this).attr("data"));
    });
});
function changetab(evt, tabName) {
    if(tabName.localeCompare("friend") == 0)
    {
        document.getElementById('friend').style.display = "inline-block";
        document.getElementById('notification').style.display = "none";
        document.getElementById('profile').style.display = "none";
    }

    if(tabName.localeCompare("notification") == 0)
    {
        document.getElementById(tabName).style.display = "inline-block";
        document.getElementById('friend').style.display = "none";
        document.getElementById('profile').style.display = "none";
    }

    if(tabName.localeCompare("profile") == 0)
    {
        document.getElementById(tabName).style.display = "inline-block";
        document.getElementById('notification').style.display = "none";
        document.getElementById('friend').style.display = "none";
    }
}
});
