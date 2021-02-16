<?php

namespace App\Taxes;

class Detector {

  public function detect(int $nb) : bool {
    return $nb > 100;
  }

}