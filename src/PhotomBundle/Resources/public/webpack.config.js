var path = __dirname;

module.exports = {
    entry: {
    	main: "./js/Home/Home.js",

    },
    resolve: {
        alias: {
            'jquery': __dirname + '/node_modules/jquery/dist/jquery.js',
            'underscore': __dirname + '/node_modules/underscore/underscore.js',
            'Backbone': __dirname + '/node_modules/backbone/backbone.js',
            'cardPost': path + '/js/CardPost.js',
            'commentView': path + '/js/views/commentView.js'
        }
    },
    output: {
        path: __dirname+"/js/dist/",
        filename: "[name].bundle.js"
    }
};
