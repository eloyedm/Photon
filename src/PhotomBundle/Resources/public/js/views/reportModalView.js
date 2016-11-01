define(['Backbone'],  function(backbone) {
  var reportModalView = Backbone.View.extend({
    tagName: "div",
    class: "fadedBackground",
    targetPub: "",
    reasons: "",

    events: {
      "click": "closeModal",
      "click .modalContent": "keepModal",
      "click .public-button": "sendReport"
    },

    initialize: function(params){
      this.targetPub = params["idPub"];
      this.getReasons();
    },

    getReasons: function(){
      var that = this;
      $.ajax({
        type  : "POST",
        url   : "/report/reasons",
        datatype: "json",
        success: function(data){
          that.reasons = data.razones;
          that.createModal();
        }
      });
    },

    createModal: function(){
      this.$el.addClass("fadedBackground");
      var modalContent = $("<div />", {
        class: "modalContent"
      });

      var modalHead = $("<div />", {
        text: "Por que deseas reportar esta publicación?",
        class: "modalHead"
      });

      var modalBody = $("<div />", {
        class: "modalBody"
      });

      var modalFoot = $("<div />", {
        class: "modalFoot"
      });
      modalContent.append(modalHead, modalBody, modalFoot);

      var listaRazones = $("<ul />", {
        class: "listaRazones"
      });
      modalBody.append(listaRazones);
      $.each(this.reasons, function(){
        var contenedorRazon = $("<li />", {
          class: "contenedorRazon"
        });
        var checkRazon = $("<input />", {
          type: "radio",
          class: "checkRazon",
          value: this.idRazon,
          name : "razonReporte"
        });

        var descripcionRazon = $("<span />", {
          text: this.descripcionRazon,
          class: "descripcionRazon"
        });
        contenedorRazon.append(checkRazon,descripcionRazon);
        listaRazones.append(contenedorRazon);
      });

      var botonReportar = $("<button />", {
        type: "button",
        text: "Reportar",
        class: "public-button"
      })
      modalFoot.append(botonReportar);

      this.$el.append(modalContent);
    },

    closeModal: function(){
      this.$el.fadeOut("slow", function(){
        this.$el.remove();
      });
    },

    keepModal: function(event){
      event.stopPropagation();
    },

    sendReport: function(){
      var reasonReported = $(".checkRazon:checked").val();
      var that = this;
      if(confirm("¿Estas seguro de que quieres reportar este contenido?")){
        $.ajax({
          method: "POST",
          url: "/report/sendReport",
          data: {
            "idPub": that.targetPub,
            "idReason": reasonReported
          },
          success: function(data){
            that.$el.fadeOut();
          }
        });
      }
    }
  });

  return reportModalView;
});
