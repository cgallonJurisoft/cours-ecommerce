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

  protected $twig;

  public function __construct(Environment $twig) {
    $this->twig = $twig;
  }

  /**
   * @Route("/hello/{prenom?World}", 
   * name="hello")
   */
  public function hello($prenom) {
    return $this->render('hello.html.twig', [
      'prenom' => $prenom,
    ]);
  } 

  /**
   * @Route("/exemple", 
   * name="exemple")
   */
  public function exemple() {
    return $this->render('exemple.html.twig', [
      'age' => 33,
    ]);
  } 

  protected function render(string $path, array $varibles = []) {
    $html = $this->twig->render($path, $varibles);
    return new Response($html);
  } 
}