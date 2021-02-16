<?php

namespace App\Taxes;

class Detector {

  public function __construct(int $seuil)
  {
    $this->seuil = $seuil;
  }

  public function detect(float $prix) : bool {
    if ($prix > $this->seuil) {
      return true;
    }

    return false;
  }

}