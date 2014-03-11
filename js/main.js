jQuery(function($) {

    // The application will be our main viewModel
    var params = {
        init: function () {
            // runs on app initialization (check for auth, etc)
        }
    };

    var app = new metaproject.Application(params);


    // .run() binds the initial viewModel and triggers the first hashchange for the url controller
    app.run();
});