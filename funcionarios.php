<?php

class funcionarios extends Pessoas {
  public $carteiraTrabalho;
  public function setcarteiraTrabalho($id)
  {
    $this->carteiraTrabalho = $id;
  }
  public function getcarteiraTrabalho()
  {
    return $this->carteiraTrabalho;
  }
}


 ?>
