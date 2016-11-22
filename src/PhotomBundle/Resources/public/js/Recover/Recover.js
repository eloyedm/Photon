define(['jquery'],  function($) {
  $(document).ready(function(){
    $("#getPreguntas").click(function(){
      var user = $("#username").val();
      console.log(user);
      if(user != ""){
        $(".updatePass").empty();
        $.ajax({
          method: "POST",
          url: "/recover/password/getQuestions",
          datatype: "json",
          data: {
            "user": user
          },
          success: function(data){
            $('#container').css({"visibility":"hidden"});
            console.log(data.questions);
            $.each(data.questions, function(){
              var container = $("<div />", {
                class: "cuestionContainer"
              });

              var radio = $("<input />", {
                type: "radio",
                name: "pregunta",
                class: "preguntaRadio",
                id: "pregunta"+this.idPregunta,
                value: this.idPregunta
              });

              var pregunta = $("<span />", {
                class: "textoPregunta",
                text: this.preguntaUno
              });

              var respuesta = $("<input />", {
                type: "text",
                id: "respuesta"+this.idPregunta,
                class: "respuesta",
                readonly: true,
                name: "respuesta"+this.idPregunta
              });

              container.append(radio,pregunta,respuesta);
              $(".updatePass").prepend(container);
            });

            $(".preguntaRadio").change(function(){
                var texto = $(this).parent().find("input[type='text']");
                $(".preguntaRadio").parent().find("input[type='text']").attr("readonly", "true").removeAttr("required").css("background-color","rgba(128,128,128,0.5)");
                texto.removeAttr("readonly").attr("required").css("background-color","white");
            });

            var enviar = $("<button />",{
              type: "submit",
              text: "Reestablecer",
              class: "style-submit"
            });

            var usuarioName = $("<input />",{
              type: "hidden",
              class: "hidden",
              value: user,
              name: "usuario"
            });

            var nuevaPass = $('<input />', {
              type: "text",
              name: "nuevaPass"
            });

            $(".updatePass").append(usuarioName,nuevaPass,enviar);
          },
          error: function(){
            alert("EL usuario es incorrecto o no existe");
          }
        });
      }
    });
  });
});
