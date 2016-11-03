define(['jquery'],  function($) {
  $(document).ready(function(){
    $("#user-profile-pic").hover(function(){
      $(this).siblings("#editProfileP").fadeIn();
    }, function(){
      $(this).siblings("#editProfileP").fadeOut();
    });

    $("#edit-info").click(function(){
      var saveButton = $("<button />", {
        id: "saveInfoButton",
        class: "userSave",
        text: "Guardar"
      });
      console.log("si jala we");
      $(".container-infoUser").append(saveButton);

      $(".user-info").removeAttr("readonly");
    });

    $("#edit-profileP").click(function(){
        $("#inputProfilePicture").click();
    });

    $("#inputProfilePicture").change(function(e){
      var input = e.target
      if(input != null ){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload = function(e){
            $("#user-profile-pic").attr("src", e.target.result);
          }
          reader.readAsDataURL(input.files[0]);
        }
      }
    });

    $(".userSave").click(function(){
      console.log("me pico");
      if(confirm("¿Estas seguro de que quieres guardar los cambios?")){
        $.ajax({
          method: "POST",
          url: "users/update/profile/info",
          data: {
            "title": $("#info-title >t:last-child").val(),
            "userName": $("#username-profile").val(),
            "name": $("#info-name >t:last-child").val(),
            "birthDate": $("#info-birthDate >t:last-child").val(),
            "country": $("#info-country >t:last-child").val(),
            "city": $("#info-city > t:last-child").val(),
            "work": $("#info-work > t:last-child").val(),
            "email": $("#info-email > t:last-child").val(),
            "about": $("#info-about > t:last-child").val()
          },
          success: function(){
            $(".user-info").attr("contentEditable", "false");
            $("#saveInfoButton").remove();
            alert("Tu información ha sido actualizada");
          }
        });
      }
    });
  });
});
