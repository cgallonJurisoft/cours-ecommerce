<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class TestController {
  public function index() {
    dd("C OKé");
  } 
  public function test(Request $request) {
    //$request = Request::createFromGlobals();
    $age = $request->query->get('age', 0);
    return new Response("T'as $age ans");
  } 
}