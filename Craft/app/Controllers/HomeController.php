<?php

namespace App\Controllers;

use App\Controllers\Controller;

class HomeController extends Controller
{
   public function index($request, $response)
   {
     return $this->c->view->render($response, 'home.twig');
   }
}
