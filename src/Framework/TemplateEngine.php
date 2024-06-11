<?php

declare(strict_types=1);

namespace Framework;

class TemplateEngine
{
  public function __construct(private string $basePath)
  {
  }

  public function render(string $template, array $data = [])
  {
    extract($data, EXTR_SKIP);
    // Start output buffering
    ob_start();

    //include "{$this->basePath}/{$template}";

    include $this->resolve($template);

    // Capture the output into a variable
    $output = ob_get_contents();

    // Clean (erase) the output buffer and turn off output buffering
    ob_end_clean();

    return $output;
  }

  public function resolve(string $path)
  {
    return "{$this->basePath}/{$path}";
  }
}
