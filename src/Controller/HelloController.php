<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController {

  protected $logger;
  protected $calculator;

  public function __construct(LoggerInterface $logger) {
    $this->logger = $logger;
  }

  /**
   * @Route("/hello/{prenom<\p{L}+>?World}", 
   * name="hello")
   */
  public function hello($prenom, Calculator $calculator) {
    $this->logger->error("Mon message de log");
    $tva = $calculator->calcul(100);

    dump($tva);

    return new Response("Hello $prenom!");
  } 
}