define(['jquery', 'Backbone'],  function($,backbone){
    var notificationView = Backbone.View.extend({
      tagName: "div",
      initialize: function(){
        this.$el.addClass("notificationCard");
        var notificacion = $("<span />", {
          text: "Sandy te dio like"
        });

        this.$el.append(notificacion);
        this.render();
      },

      render: function(){
        $("body").append(this.$el);
      }
    });

    return notificationView;
});
