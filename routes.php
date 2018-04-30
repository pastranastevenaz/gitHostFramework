<?php


$klein->respond(function ($request, $response, $service) {
    $service->layout('layouts/default.php');
});

// Home page view
$klein->respond('/', function ($request, $response, $service) {
    // add some data to the view.
    $service->pageTitle = 'Home page';
    // This is the function that renders the view inside the layout.
    $service->render('views/home.php');
});

$klein->respond('/home', function ($request, $response, $service) {
    // add some data to the view.
    $service->pageTitle = 'Home page';
    // This is the function that renders the view inside the layout.
    $service->render('views/home.php');
});



// About page view
$klein->respond('/about', function ($request, $response, $service) {
    // add some data to the view.
    $service->pageTitle = 'About page';
    // This is the function that renders the view inside the layout.
    $service->render('views/about.php');
});


$klein->onHttpError(function ($code, $router) {
    switch ($code) {
        case 404:
            $router->response()->body(
                'Custom 404 Page!'
            );
            break;
        case 405:
            $router->response()->body(
                'Custom 405 Page'
            );
            break;
        default:
            $router->response()->body(
                'Oh no, a bad error happened that caused a '. $code
            );
    }
});



$klein->dispatch();



 ?>
