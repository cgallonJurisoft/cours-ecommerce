<?php

namespace App\Taxes;

class Detector {

  public function detect(float $prix) : bool {
    return $prix > 100;
  }

}