<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->view->render($response, 'index.twig', [
        'args' => $args
    ]);
})->setName('index');

// $app->map(['GET', 'POST'], '/inscription', function (Request $request, Response $response, array $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/inscription' route");
//     $parsedBody = $request->getParsedBody();
//     // Render index view
//     var_dump($parsedBody);
    
//         return $this->view->render($response, 'inscription.twig', [
//             'parsedBody' => $$parsedBody
//     ]);
// })->setName('inscription');

$app->get('/inscription', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/inscription' route");
    $parsedBody = $request->getParsedBody();
    // Render index view
    return $this->view->render($response, 'inscription.twig', [
        'parsedBody' => $$parsedBody
    ]);
})->setName('inscription');

$app->post('/login', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/login' route");
    $parsedBody = $request->getParsedBody();
    $parsedBody['isValide'] = ($parsedBody['email'] === "hichem@gmail.com" && $parsedBody['password'] ==="1234");

        return $this->view->render($response, 'login.twig', $parsedBody);
})->setName('login');
