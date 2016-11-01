define(['Backbone'],  function(backbone) {
    var commentView = Backbone.View.extend({
      tagName: "li",
      usuario: "",
      comentario: "",
      foto: "",
      initialize: function(datosComentario){
        this.usuario = datosComentario["autor"];
        this.comentario = datosComentario["comentario"];
        this.render();
      },
      render: function(){
        this.$el.addClass("list-group-item text-left");

        var usrImg = $("<img />", {
          class: "img-thumbnail",
          src: "http://bootdey.com/img/Content/User_for_snippets.png"
        });

        var postUs = $("<div />", {
          class: "post-user"
        });

        var labelName = $("<label>", {
          class: "name",
          text: this.usuario
        });

        var labelComment = $("<label>", {
          class: "comment",
          text: this.comentario
        });

        postUs.append(labelName,labelComment);
        this.$el.append(usrImg, postUs);
      }
    });
  return commentView;
});
