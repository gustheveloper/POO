<?php
/**
 *
 */
class Pessoas
{
  public $nome;
  private $idade;
  protected $CPF;
  public $email;

  public function falar()
  {
    echo "Alex é tops";
  }
  public function setIdade($idade)
  {

    $this->idade = $idade;
  }
  public function getIdade()
  {
    return $this->idade;
  }
}


 ?>
