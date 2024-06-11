<?php

declare(strict_types=1);

/* before composer  use below code */
//include __DIR__ . '/../Framework/App.php';

/* after using composer use below code for autoload */
require __DIR__ . '/../../vendor/autoload.php';

use Framework\App;
use App\Controller\HomeController;
use App\Controller\AboutController;

$app = new App();

//$app->get('/', ['App\Controller\HomeController', 'home']);
$app->get('/', [HomeController::class, 'home']);
$app->get('/about', [AboutController::class, 'about']);

/* for consistancy on route url //output will be /about/team/  */
// $app->get('about/team'); 
// $app->get('/about/team'); 
// $app->get('/about/team/'); 
// $app->get('about/team/'); 

//dd($app);

return $app;
