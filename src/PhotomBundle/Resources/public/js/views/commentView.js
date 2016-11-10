define(['Backbone'],  function(backbone) {
    var commentView = Backbone.View.extend({
      tagName: "li",
      usuario: "",
      comentario: "",
      foto: "",
      link: "",
      initialize: function(datosComentario){
        this.usuario = datosComentario["autor"];
        this.comentario = datosComentario["comentario"];
        this.foto = datosComentario["image"];
        this.link = datosComentario["link"];
        this.render();
      },
      render: function(){
        this.$el.addClass("list-group-item text-left");

        var usrImg = $("<img />", {
          class: "img-thumbnail",
          src: "data:image/jpeg;base64,"+ this.foto
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
