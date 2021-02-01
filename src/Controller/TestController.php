<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController {

  /**
   * @Route("/", name="index")
   */
  public function index() {
    dd("C OKé");
  } 

  /**
   * @Route("/test/{age<\d+>?0}", 
   * name="test",
   * methods={"GET", "POST"}, 
   * host="localhost", 
   * schemes={"https", "http"})
   */
  public function test(Request $request, $age) {
    return new Response("T'as $age ans");
  } 
}