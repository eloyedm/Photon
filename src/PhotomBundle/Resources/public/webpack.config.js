var path = __dirname;

module.exports = {
    entry: {
    	main: "./js/Home/Home.js",
      profile: "./js/Perfil/Perfil.js",
      register: './js/Register/Register.js',
      recover: './js/Recover/Recover.js'
    },
    resolve: {
        alias: {
            'jquery': __dirname + '/node_modules/jquery/dist/jquery.js',
            'underscore': __dirname + '/node_modules/underscore/underscore.js',
            'Backbone': __dirname + '/node_modules/backbone/backbone.js',
            'slick': __dirname + '/node_modules/slick-carousel/slick/slick.js',
            'cardPost': path + '/js/CardPost.js',
            'updateUserInfo': path + '/js/Perfil/updateUserInfo.js',
            'commentView': path + '/js/views/commentView.js',
            'reportModalView': path + '/js/views/reportModalView.js',
            'menu': path + '/js/Menu.js',
            'notificationView': path + '/js/views/notificationView.js'
        }
    },
    output: {
        path: __dirname+"/js/dist/",
        filename: "[name].bundle.js"
    }
};
