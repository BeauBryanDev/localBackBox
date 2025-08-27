<?php

require( "../vendor/autoload.php");

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use Router\RouterHandler;


//get the URL

$slug = $_GET['slug'] ?? '/';

$slug = explode("/", $slug );

$resource = $slug[0] == "" ? "/" : "/".$slug[0];

$id = $slug[1] ?? null;

//router instance
$router = new RouterHandler();

switch ($resource) {
    case '/':
        // Handle the home page
        echo "This is the home page\n";
        break;
    case '/incomes':
        // Handle the incomes resource
        echo "This is the incomes page\n";
        $method = $_POST['method'] ?? 'GET';
        $router->setMethod($method);
        $router->setData($_POST);
        $router->route(IncomesController::class, $id);

        break;
    case '/withdrawals':
        // Handle the withdrawals resource
        echo "This is the withdrawals page\n";
        $method = $_POST['method'] ?? 'GET';
        $router->setMethod($method);
        $router->setData($_POST);
        $router->route(WithdrawalsController::class, $id);
        break;
    default:
        // Handle 404 Not Found
        echo "404 Not Found\n";
        break;
}

// Create a new Router instance
//$router = new App\Router();

// Define your routes
// $router->get('/', [App\Controllers\HomeController::class, 'index']);
// $router->get('/incomes', [App\Controllers\IncomesController::class, 'index']);
// $router->get('/incomes/create', [App\Controllers\IncomesController::class, 'create']);
// $router->post('/incomes', [App\Controllers\IncomesController::class, 'store']);
// $router->get('/incomes/{id}', [App\Controllers\IncomesController::class, 'show']);
// $router->get('/incomes/{id}/edit', [App\Controllers\IncomesController::class, 'edit']);
// $router->put('/incomes/{id}', [App\Controllers\IncomesController::class, 'update']);
// $router->delete('/incomes/{id}', [App\Controllers\IncomesController::class, 'destroy']);

// $router->get('/withdrawals', [App\Controllers\WithdrawalsController::class, 'index']);
// $router->get('/withdrawals/create', [App\Controllers\WithdrawalsController::class, 'create']);
// $router->post('/withdrawals', [App\Controllers\WithdrawalsController::class, 'store']);
// $router->get('/withdrawals/{id}', [App\Controllers\WithdrawalsController::class, 'show']);
// $router->get('/withdrawals/{id}/edit', [App\Controllers\WithdrawalsController::class, 'edit']);
// $router->put('/withdrawals/{id}', [App\Controllers\WithdrawalsController::class, 'update']);
// $router->delete('/withdrawals/{id}', [App\Controllers\WithdrawalsController::class, 'destroy']);

// Match the current request to a route
//$router->match($slug);