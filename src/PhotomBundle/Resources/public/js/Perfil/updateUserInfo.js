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
      $(".container-infoUser").prepend(saveButton);
      saveButton.click(function(){
        console.log($("#info-birthDate input").val());
        if(confirm("¿Estas seguro de que quieres guardar los cambios?")){
          $.ajax({
            method: "POST",
            url: "usuarios/editar",
            datatype: "json",
            data: {
              "title": $("#info-title input").val(),
              "userName": $("#username-profile").text(),
              "name": $("#info-name input").val(),
              "birthDate": $("#info-birthDate input").val(),
              "country": $("#info-country input").val(),
              "city": $("#info-city input").val(),
              "work": $("#info-work input").val(),
              "email": $("#info-email input").val(),
              "about": $("#info-about input").val()
            },
            success: function(data){
              console.log(data);
              $(".user-info#username-profile").removeAttr("contentEditable");
              $(".user-info").attr("readonly", "true");
              $("#saveInfoButton").remove();
              alert("Tu información ha sido actualizada");
            }
          });
        }
      });
      $(".user-info").removeAttr("readonly");
      $(".user-info#username-profile").attr("contentEditable", "true");
    });

    $("#editProfileP").click(function(){
      $("#inputProfilePicture").click();
    });

    $("#editProfileB").click(function(){
      $("#inputBannerPicture").click();
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
        $("#profilePictureForm").submit();
      }
    });

    $("#inputBannerPicture").change(function(e){
      var input = e.target
      if(input != null ){
        if(input.files && input.files[0]){
          var reader = new FileReader();
          reader.onload = function(e){
            $("#banner").attr("src", e.target.result);

          }
          reader.readAsDataURL(input.files[0]);
        }
        $("#bannerPictureForm").submit();
      }
    });
  });
});
