<?php

namespace App\Controllers;

use App\Base\Controller;
use App\Models\Portfolio;

class PortfoliosControllers extends Controller
{

  public function index()
  {
    $portfolio = new Portfolio();
    $portfolios = $portfolio->get();
    return views('portfolio/index.php', ['portfolios' => $portfolios]);
  }
}
