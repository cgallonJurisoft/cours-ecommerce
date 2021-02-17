<?php

namespace App\Controller;

use App\Taxes\Calculator;
use App\Taxes\Detector;
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
  public function hello($prenom, Environment $twig) {

    $html = $twig->render('hello.html.twig', [
      'prenom' => $prenom,
      'formateur1' => [
        'prenom' => 'Lior',
        'nom' => 'Chamla',
        'age' => 33
      ],
      'formateur2' => [
        'prenom' => 'Stephanie',
        'nom' => 'Loukoum',
        'age' => 48
      ]
    ]);
    return new Response($html);

  } 
}