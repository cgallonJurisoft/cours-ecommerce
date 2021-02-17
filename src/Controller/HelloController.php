<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HelloController extends AbstractController {

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

}