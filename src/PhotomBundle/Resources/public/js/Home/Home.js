define(['jquery', 'Backbone', 'cardPost', 'menu'],  function($, backbone, cardPost, menu) {
  $(document).ready(function(){
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

  });
});
