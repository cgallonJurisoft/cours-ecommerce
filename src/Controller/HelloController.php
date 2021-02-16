<?php

namespace App\Controller;

use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class HelloController {

  protected $logger;
  protected $calculator;

  /**
   * @Route("/hello/{prenom<\p{L}+>?World}", 
   * name="hello")
   */
  public function hello($prenom, LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig) {
    // $slugify = new Slugify();

    dump($slugify->slugify("Hello World"));

    $logger->error("Mon message de log");
    $tva = $calculator->calcul(100);

    dump($tva);

    return new Response("Hello $prenom!");
  } 
}