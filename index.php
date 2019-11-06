<?php
require_once 'pessoas.php';
require_once 'funcionarios.php';

$pessoaUm = new Pessoas();

$pessoaUm->nome ="Gustavo";
// $pessoaUm->idade = 23;
//
$pessoaUm->setIdade(23);

echo "<h1>$pessoaUm->nome</h1>";
echo "<h1>".$pessoaUm->getIdade()."</h1>";
//
// var_dump($pessoaUm);

$pessoaDois = new Pessoas();
$pessoaDois->nome = "Alex";

// var_dump($pessoaDois);

$funcionarioUm = new funcionarios;
$funcionarioUm->nome = "Aline";
$funcionarioUm->setIdade(21);


$funcionarioUm->setcarteiraTrabalho(12304123);
echo "<h1>".$funcionarioUm->getcarteiraTrabalho()."</h1>";

print_r($funcionarioUm);
 ?>
