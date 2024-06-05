<?php 

declare(strict_types=1);

/* before composer  use below code */
//include __DIR__ . '/../Framework/App.php';

/* after using composer use below code for autoload */
require __DIR__ . '/../../vendor/autoload.php';

use Framework\App;

$app = new App();

return $app;