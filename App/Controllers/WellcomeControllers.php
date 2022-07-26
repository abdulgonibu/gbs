<?php
namespace App\Controllers;

use App\Base\Controller;

class WellcomeControllers extends Controller
{

  public function hello()
  {
       $this->views('index.php');
  }
}