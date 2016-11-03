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
    text: "Guardar"
  });
  console.log("si jala we");
  $(".container-infoUser").append(saveButton);

  $(".user-info").attr("contentEditable", "true");
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

$("#saveInfoButton").click(function(){
 if(confirm("¿Estas seguro de que quieres guardar los cambios?")){
   $.ajax({
     method: "POST",
     url: "users/update/profile/info",
     data: {
       "title": $("#info-title >t:last-child").text(),
       "name": $("#info-name >t:last-child").text(),
       "birthDate": $("#info-birthDate >t:last-child").text(),
       "country": $("#info-country >t:last-child").text(),
       "city": $("#info-city > t:last-child").text(),
       "work": $("#info-work > t:last-child").text(),
       "email": $("#info-email > t:last-child").text(),
       "about": $("#info-about > t:last-child").text()
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
