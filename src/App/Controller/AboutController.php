<?php

declare(strict_types=1);

namespace App\Controller;

use Framework\TemplateEngine;
use App\Config\paths;

class AboutController
{
  private TemplateEngine $view;

  public function __construct()
  {
    $this->view = new TemplateEngine(paths::VIEW);
  }

  public function about()
  {
    echo $this->view->render('/about.php', [
      'title' => 'About Page'
    ]);
  }
}
