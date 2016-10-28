define(['jquery', 'Backbone', 'cardPost'],  function($, backbone, cardPost) {
  $(document).ready(function(){

    $("#camera-button").click(function(){
      $(".photoSubmit").click();
    });

    $("#video-button").click(function(){
      $(".videoSubmit").click();
    });

    $(".photoSubmit").change(function(e){
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
