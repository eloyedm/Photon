define(['jquery', 'Backbone'],  function($,backbone){
    var notificationView = Backbone.View.extend({
      tagName: "div",
      user: "",
      contenido: "",
      comentario: "",
      like: "",
      idNotif: "",
      initialize: function(notificacion){
        this.user = notificacion['autor'];
        this.comentario = notificacion['comentario'];
        this.like = notificacion['gusta']
        this.contenido = notificacion['idContenido'];
        this.idNotif = notificacion['id'];
        this.$el.addClass("notificationCard");
        this.$el.append(notificacion);
        this.render();
      },

      render: function(){
        var accion = "";
        if(this.like == ""){
          accion = " le gusta tu publicacion";
        }
        else{
          accion = " comento tu publicacion";
        }

        var usuario =  this.user;

        var contenidoNotif = $("<span />",{
            class: "contenidoNotificacion",
            text: usuario + accion
        });

        var link = $("<a />",{
          href: "/detail/content/"+this.contenido
        });

        link.append(contenidoNotif);
        this.$el.append(link);
        $("body").append(this.$el);
      }
    });

    return notificationView;
});
