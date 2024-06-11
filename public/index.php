<?php

//phpinfo();
// ini_set('memory_limit', '255M');
// echo ini_get('memory_limit');
// echo "<pre>";
//  print_r($_SERVER);
// echo "</pre>";

include __DIR__ . '/../src/App/functions.php';

$app = include __DIR__ . '/../src/App/bootstarp.php';

$app->run();

//dd($app); // using suger function that are easy to read and understand