<?php

declare(strict_types=1);

namespace App\Controller;

use Framework\TemplateEngine;
use App\Config\paths;

class HomeController
{
  private TemplateEngine $view;

  public function __construct()
  {
    $this->view = new TemplateEngine(paths::VIEW);
  }
  public function home()
  {
    // dd($this->view);
    // echo "Home Page!";
    echo $this->view->render('/index.php', [
      'title' => 'Home Page'
    ]);
  }
}
